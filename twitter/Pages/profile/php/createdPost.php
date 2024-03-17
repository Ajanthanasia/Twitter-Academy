
<?php
include("databaseConnection.php");
$querymyPost = "SELECT * FROM `tweet`
                WHERE id_user = $My_id";
        $getusers_myPost = mysqli_query($conn, $querymyPost);
        if (mysqli_num_rows($getusers_myPost) > 0) {
            while ($i = mysqli_fetch_assoc($getusers_myPost)) {
                $id = $i['id'];
                $content = $i['content'];
                if ($profilePicture == null) {
                    $profilePicture = 'download.png';
                }
            ?>

<div class="row">
<div class="col-md-12">
    <div class="row">
        <div class="col-md-2">
            <img class="img-fluid img-circle" src="./../../scripts/img/profile/<?php echo $profilePicture; ?>" alt="...">
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
