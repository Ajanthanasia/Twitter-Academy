<?php
session_start();
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
}
?>
<div class="mt-4 mb-4">
    <div class="row">
        <div class="col-md-6">
            <label for="">Username :</label>
        </div>
        <div class="col-md-6">
            <strong>
                <?php echo $user['username']; ?>
            </strong>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="">Email :</label>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" value="none">
            <?php echo $user['mail']; ?>
        </div>
    </div>
</div>
<input type="hidden" id="userId" value="<?php echo $id; ?>">

<!-- <script language="javascript">
    const userId = $('#userId').val();
    $.ajax({
        url: './../../routes/getUserProfileData.php',
        method: 'get',
        data: {
            id: userId,
        },
        dataType: 'html',
        success: function(res) {
            console.log(res);
        }

    });
</script> -->