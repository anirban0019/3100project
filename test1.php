<!DOCTYPE html>
<html>
  <head>

  </head>
  <body>
  <?php include_once "bcknd/profile.php";

   echo'<script>';
   echo 'var UserId = "' . $bio . '";';
   echo '</script>';
   ?>
    <div class="row">
                  <div class="col-md-6">
                    <label>User Id</label>
                  </div>
                  <div class="col-md-6">
                    <p class="profile-username"><?php echo "$bio"?></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>Name</label>
                  </div>
                  <div class="col-md-6">
                    <p class="profile-name"></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>Email</label>
                  </div>
                  <div class="col-md-6">
                    <p class="profile-email"></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>Phone</label>
                  </div>
                  <div class="col-md-6">
                    <p id="bio"></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>Profession</label>
                  </div>
                  <div class="col-md-6">
                    <p class="profile-role"></p>
     <script>
      var namee = "<?php echo $name; ?>";
      var email = "<?php echo $email; ?>";
      var username = "<?php echo $username; ?>";
      var role = "<?php echo $role; ?>";
      var profile_picture = "<?php echo $profile_picture; ?>";
      //var bio = "<?php echo $bio; ?>";
      var field_of_research = "<?php echo $field_of_research; ?>";
   </script>
    <script src="js/profile.js"></script>
  </body>
</html>
