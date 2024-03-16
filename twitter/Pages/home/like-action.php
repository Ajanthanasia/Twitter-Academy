<script language="javascript">
    $(document).on('click', '.like-button', function() {
        var tweetId = $(this).data('tweet-id');
        var userId = $('#userId').val();
        $.ajax({
            url: './../../routes/likeTweetAction.php',
            method: 'post',
            data: {
                tweetId: tweetId,
                userId: userId,
            },
            dataType: 'html',
            success: function(res) {
                if (res == '1') {
                    alert('Liked successfully');
                } else {
                    alert('You already Liked this tweet');
                }
            }
        });
    });
</script>