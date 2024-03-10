<?php
$mail = $_GET['mail'];
?>
<div class="mt-4 mb-4">
    <div class="row">
        <div class="col-md-6">
            <label for="">Username :</label>
        </div>
        <div class="col-md-6">
            <strong>
                <?php echo $username; ?>
            </strong>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="">Email :</label>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" value="<?php echo $mail; ?>">
        </div>
    </div>
</div>