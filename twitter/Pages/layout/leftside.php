<?php
if($_SESSION['userDetails_Twit']=="Logout"){
    echo "<script>alert('helo logout');</script>";
    header("location:../../index.php");
}
?> 
<div class="mb-4 mt-4">
    <div class="row mb-2">
        <div class="col-md-4">
            <button class="btn btn-primary form-control">X</button>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-md-12">
            <a href="./../home/index.php">
                <button class="btn btn-primary form-control">Home</button>
            </a>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-md-12">
            <a href="./../profile/profile.php">
                <button class="btn btn-primary form-control">Profile</button>
            </a>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-md-12">
            <a href="" >
                <button class="btn btn-primary form-control" id="logoutButton">Logout</button>
            </a>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="../Logout/Logout.js"></script>