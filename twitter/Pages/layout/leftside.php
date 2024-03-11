<?php
$id = $_GET['id'];
?>
<div class="mb-4 mt-4">
    <div class="row mb-2">
        <div class="col-md-4">
            <button class="btn btn-primary form-control">X</button>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-md-12">
            <a href="./../home/index.php?id=<?php echo $id; ?>">
                <button class="btn btn-primary form-control">Home</button>
            </a>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-md-12">
            <!-- <a href="./../profile/profile.php?id=<?php echo $id; ?>"> -->
            <a href="./../../routes/getUserProfileData.php?id=<?php echo $id; ?>">
                <button class="btn btn-primary form-control">Profile</button>
            </a>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-md-12">
            <a href="./../../index.php">
                <button class="btn btn-primary form-control">Logout</button>
            </a>
        </div>
    </div>
</div>