 <!-- starting session -->
 <?php include_once "include/start_session.php" ?>
     <!-- backend for fetching data -->
<?php include_once "bcknd/profile.php" ?>
<!--check user-->
<?php include_once "include/check_user.php" ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <link
      href="css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css"
    />
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="css/test_profile.css" />
    <title><?php echo "$name"?></title>
  </head>
  <!------ Include the above in your HEAD tag ---------->

  <body>
    <header>
      <!-- navbar -->
      <?php include_once "include/navbar.php" ?>
      
    </header>
    <?php include_once "include/alert.php" ?>
    <div class="container emp-profile">
     
        <div class="row">
          <div class="col-md-4">
            <div class="profile-img">
              <img src="<?php echo "$profile_picture"?>" alt="sorry, no picture found" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="profile-head">
              <h5 class="profile-name"><?php echo "$name"?></h5>
              <h6 id="bio"><?php echo "$bio"?></h6>
              <br> <br> <br>
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    id="home-tab"
                    data-toggle="tab"
                    href="#home"
                    role="tab"
                    aria-controls="home"
                    aria-selected="false"
                    >About</a
                  >
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-2">
    <?php
    if ($editVisible) {
        echo '
  
        <input type="submit" class="profile-edit-btn" id="edit-profile-btn" name="btnEditProfile" value="Edit Profile" onclick="to_edit()"/>
    </form>
    
        ';
    }
    ?>
    <script>
    function to_edit(){
      window.location.href = "edit_profile.php?id=<?php echo $uname ?>";
    }
    </script>
</div>

        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="profile-work">
              <p>WORK LINK</p>
              <a href="admin/edit_profile.php">Websites</a><br />
              <a href="">Bootsnipp Profile</a><br />
              <a href="">Bootply Profile</a>
              <p>SKILLS</p>
              <a href="">Web Designer</a><br />
              <a href="">Web Developer</a><br />
              <a href="">WordPress</a><br />
              <a href="">WooCommerce</a><br />
              <a href="">PHP, .Net</a><br />
            </div>
          </div>
          <div class="col-md-8">
            <div class="tab-content profile-tab" id="myTabContent">
              <div
                class="tab-pane fade show active"
                id="home"
                role="tabpanel"
                aria-labelledby="home-tab"
              >
              <table class="table">
    <tbody>
        <tr>
            <td><strong>User Id</strong></td>
            <td><?php echo "$username"?></td>
        </tr>
        <tr>
            <td><strong>Name</strong></td>
            <td><?php echo "$name"?></td>
        </tr>
        <?php if ($role == "student"): ?>
        <tr>
            <td><strong>Roll no</strong></td>
            <td><?php echo "$st_roll"; ?></td>
        </tr>
        <?php endif; ?>
        <tr>
            <td><strong>Email</strong></td>
            <td><?php echo "$email"?></td>
        </tr>
        <tr>
            <td><strong>Phone</strong></td>
            <td><?php echo "$mobile"?></td>
        </tr>
        <tr>
            <td><strong>Address</strong></td>
            <td><?php echo "$address"?></td>
        </tr>
        <tr>
            <td><strong>Profession</strong></td>
            <td><?php echo "$role"?></td>
        </tr>
    </tbody>
</table>

              </div>
            </div>
          </div>
        </div>
      
      <div class="col-md-2">
    <?php
    

    ?>
</div>

    </div>
   
  </body>
</html>
