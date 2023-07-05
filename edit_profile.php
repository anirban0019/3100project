<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Profile</title>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
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
    <!-- alert -->
    <?php include_once "include/alert.php" ?>
</header>

    <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img  width="250px" src="<?php echo "$profile_picture"?>" alt="sorry, no picture found"><br>
            <span class="font-weight-bold" > 
          <form method="post" enctype="multipart/form-data" action="include/update_dp.php">
          <input type="file" class="form-control" id="profile-picture" name="profile_pic"> <br>
          <input type="submit" class="btn btn-primary" name="submit" value="Upload">
    </form>
      </span></div>
        </div>
        
       
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <form method="post" action="bcknd/update_profile.php">
                <div class="row mt-2">
                    <div class="col-md-12"><label class="labels">Name</label><input type="text" name="name" class="form-control" value="<?php echo "$name"?>"></div>
                    <?php if($role == "student") echo '<div class="col-md-12"><label class="labels">Roll Number</label><input type="text" name="roll_no" class="form-control" value="' . $st_roll . '"></div>'; ?>
                </div>
                <div class="row mt-3">
                    <!-- <div class="col-md-12"><label class="labels">Username</label><input type="text" name="username"  class="form-control" placeholder="<?php echo "$username"?>" value=""></div> -->
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" name="mobile"class="form-control"value="<?php echo "$mobile";?>"></div>
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="email" name="email" class="form-control"  value="<?php echo "$email"?>"></div>
                    <div class="col-md-12"><label class="labels">Address </label><input type="text" name="address" class="form-control" value="<?php echo "$address"?>"></div>
                    <div class="col-md-12"><label class="labels">Bio</label><input type="text" name="bio" class="form-control" value="<?php echo "$bio"?>"></div>
                </div>
                
                <div class="mt-5 text-center"><input type="submit" class="btn btn-primary profile-button" name="info_submit" value="Save Profile"></div>
              </form>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span><b>Change Password</b></span></div><br>
                <form action="bcknd/update_pass.php" method="post">
                <div class="col-md-12"><label class="labels">Current password</label><input type="password" name="old_pass" class="form-control" value=""></div> <br>
                <div class="col-md-12"><label class="labels">New Password</label><input type="password" class="form-control" name="new_pass" value=""></div>
                <div class="col-md-12"><label class="labels">Confirm New Password</label><input type="password" class="form-control" name="confirm_pass" value=""></div><br>
                <!-- if password is error -->
                <?php include_once "include/error.php" ?>
                <div class="mt-5 text-center"><input class="btn btn-primary profile-button" type="submit" name="set_pass" value="Set new Password"></div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>
