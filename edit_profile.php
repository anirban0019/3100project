<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/test_profile.css" rel="stylesheet">
</head>
<body>
<header>
    <!-- Header content -->
    <!-- starting session -->
    <?php include_once "include/start_session.php" ?>
    <!-- navbar -->
    <?php include_once "include/navbar.php" ?>
    <!-- fetching user info -->
    <?php include_once "bcknd/b_edit_profile.php" ?>
</header>

    <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img  width="250px" src="<?php echo "$profile_picture"?>" alt="sorry, no picture found"><br>
            <span class="font-weight-bold" > 
        <input type="file" class="form-control" id="profile-picture" name="profile-picture"> </span><br>
        <span class="font-weight-bold" >
        <button type="submit" class="btn btn-primary" name="submit">Upload</button>
      </span></div>
        </div>

        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12"><label class="labels">Name</label><input type="text" class="form-control" placeholder="<?php echo "$name"?>" value=""></div>
                    </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Username</label><input type="text" class="form-control" placeholder="<?php echo "$username"?>" value=""></div>
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="<?php echo "$mobile"?>" value=""></div>
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="<?php echo "$email"?>" value=""></div>
                    <div class="col-md-12"><label class="labels">Address </label><input type="text" class="form-control" placeholder="<?php echo "$address"?>" value=""></div>
                    <div class="col-md-12"><label class="labels">Bio</label><input type="text" class="form-control" placeholder="<?php echo "$bio"?>" value=""></div>
                </div>
                
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span><b>Change Password</b></span></div><br>
                <div class="col-md-12"><label class="labels">Current password</label><input type="text" class="form-control" value=""></div> <br>
                <div class="col-md-12"><label class="labels">New Password</label><input type="text" class="form-control" value=""></div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Set new Password</button></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>
