<?php
include("databaseConnection.php");
$querymy_re_tweet_post = "SELECT user.id AS 'Userid' , user.username AS 'username',user.profile_picture AS 'profile',tweet.id,tweet.content AS 'content' FROM 
                        user join tweet ON user.id=tweet.id_user
                        WHERE user.id IN (
                            SELECT  tweet.id_user FROM tweet WHERE tweet.id IN
                            (
                                SELECT DISTINCT retweet.id_tweet FROM retweet WHERE retweet.id_user=16
                            )
                        )";
        $getusers_my_re_tweet_Post = mysqli_query($conn, $querymy_re_tweet_post);
        if (mysqli_num_rows($getusers_my_re_tweet_Post) > 0) {
            while ($i = mysqli_fetch_assoc($getusers_my_re_tweet_Post)) {
                $id = $i['Userid'];
                $content = $i['content'];
                $profilePicture_user=$i['profile'];
                $username=$i['username'];

                if ($profilePicture_user == null) {
                    $profilePicture_user = 'download.png';
                }
            ?>

<div class="row">
<div class="col-md-12">
    <div class="row">
    <div class="col-md-2">
            <span><?php echo $username; ?></span>
        </div>
        <div class="col-md-2">
            <img class="img-fluid img-circle" src="./../../scripts/img/profile/<?php echo $profilePicture_user; ?>" alt="...">
        </div>
        <div class="col-md-10">
            <h2><span class="badge badge-secondary"></span></h2>
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
            <button class="btn btn-success form-control like-button" data-tweet-id="">Like</button>
        </div>
    </div>
    <br>
</div>
</div>
<?php
            }
        }
        ?>
