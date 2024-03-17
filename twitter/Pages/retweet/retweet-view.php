<?php
$tweet = $_SESSION['tweet'];
$content = $tweet['content'];
if ($tweet['profilePicture'] == null) {
    $dp = 'download.png';
} else {
    $dp = $tweet['profilePicture'];
}
$username = $tweet['username'];
$tweetId = $tweet['tweetId'];
?>
<style>
    .circle {
        border-radius: 50%;
    }
</style>
<div class="mt-4 mb-4">
    <div class="row">
        <div class="col-md-12">
            <h2>
                <span class="badge text-bg-secondary">
                    Retweet
                </span>
            </h2>
        </div>
    </div>
    <div class="row">
        
        <div class="col-md-2">
            <img class="img-fluid circle" src="./../../scripts/img/profile/<?php echo $dp; ?>" alt="dp">
        </div>
        <div class="col-md-10">
            <h4>
                <span class="badge text-bg-primary">
                    User : <?php echo $username ?>
                </span>
            </h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <textarea class="form-control" rows="5" disabled><?php echo $content; ?></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <button class="btn btn-primary confirm">Confirm Retweet</button>
        </div>
    </div>
</div>

<input type="hidden" id="userId" value="<?php echo $_SESSION['userDetails_Twit']['id']; ?>">
<input type="hidden" id="tweetId" value="<?php echo $tweetId; ?>">
<script language="javascript">
    $(document).on('click', '.confirm', function() {
        var userId = $('#userId').val();
        var tweetId = $('#tweetId').val();
        $.ajax({
            url: './../../routes/retweetStore.php',
            method: 'post',
            data: {
                userId: userId,
                tweetId: tweetId,
            },
            dataType: 'html',
            success: function(res) {
                alert(res);
                window.location.href = "../profile/profile.php";
            }
        });
    });
</script>