<link rel='stylesheet' href='./posts.css'>
<?php
if (!$_SESSION['login']) {
    header("location:home/index.php");
}
?>
<div class="mt-4 mb-4">
    <div class="row">
        <div class="col-md-2">
            <?php

            if (isset($_SESSION['login']) && isset($_SESSION['userDetails_Twit'])) {
                $user = $_SESSION['userDetails_Twit'];
                $profilePicture = !empty($user['profile_picture']) ? $user['profile_picture'] : 'download.png';
            ?>
                <img class='img-fluid img-circle' src="../../scripts/img/profile/<?php echo $profilePicture; ?>" alt="Profile Picture" />
            <?php
            }
            ?>
        </div>
        <div class="col-md-10">
            <textarea name='tweet' id="tweetTextarea" class='form-control' placeholder='What is happening?!' rows='3'></textarea>
            <span class='post-error'></span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-4">
            <button class="btn btn-primary form-control submit-tweet">Post</button>
        </div>
    </div>

    <?php
    include('./../../routes/databaseConnection.php');
    $query = "SELECT 
            user.username as username,
            tweet.content as content,
            user.profile_picture as profile_picture,
            tweet.id as tweetId
            FROM tweet JOIN user ON tweet.id_user = user.id ORDER BY tweet.id DESC";
    $getTweetsFromDB = mysqli_query($conn, $query);
    $getTweets = mysqli_num_rows($getTweetsFromDB);
    while ($tweet = mysqli_fetch_assoc($getTweetsFromDB)) {
        $tweetUserName = $tweet['username'];
        $content = $tweet['content'];
        $getProfilePicture = $tweet['profile_picture'];
        if ($getProfilePicture == null) {
            $profilePicture = 'download.png';
        } else {
            $profilePicture = $getProfilePicture;
        }
        $tweetId = $tweet['tweetId'];
    ?>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2">
                        <img class="img-fluid img-circle" src="./../../scripts/img/profile/<?php echo $profilePicture; ?>" alt="...">
                    </div>
                    <div class="col-md-10">
                        <h2><span class="badge badge-secondary"><?php echo $tweetUserName; ?></span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                        <textarea class="form-control" rows="4"><?php echo $content; ?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-3">
                        <button class="btn btn-success form-control like-button" data-tweet-id="<?php echo $tweetId; ?>">Like</button>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-warning form-control">Comment</button>
                    </div>
                    <div class="col-md-3">
                        <!-- <a href="./../retweet/index.php"> -->
                        <a href="./../../routes/loadRetweetView.php?tid=<?php echo $tweetId; ?>">
                            <button class="btn btn-info form-control">Retweet</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>



<input type="hidden" id="userId" value="<?php echo $_SESSION['userDetails_Twit']['id']; ?>">

<script language="javascript">
    var hashtagsArrayGlobal = [];
    $('#tweetTextarea').keyup(function() {
        var tweet = $("[name='tweet']").val();
        var hashtags = tweet.match(/#\w+/g);
        var hashtagsArray = [];
        if (hashtags) {
            // Loop through each hashtag found
            hashtags.forEach(function(tag) {
                hashtagsArray.push(tag);
            });
        }
        hashtagsArrayGlobal=hashtagsArray
    });
    $(document).on('click', '.submit-tweet', function() {
        var userId = $('#userId').val();
        var tweet = $("[name='tweet']").val();

        if (tweet == '' || tweet == null) {
            $('.post-error').text('This field is required');
        } else if (tweet.length > 140) {
            $('.post-error').text('No more exists 140 characters');

        } else {
            // console.log(hashtagsArrayGlobal,"---");
            $('.post-error').empty();
            $.ajax({
                url: "./../../routes/postStore.php",
                method: 'post',
                data: {
                    tweet: tweet,
                    userId: userId,
                    "hashtagsArray":hashtagsArrayGlobal,
                },
                
                dataType: 'html',
                success: function(res) {
                    alert('Tweet added successfully');
                    // window.location.href = 'index.php';
                    setTimeout(() => {
                        window.location.href = './index.php';
                    }, 2000);
                }
            });
        }
    });
</script>
<?php
include('./like-action.php');
?>