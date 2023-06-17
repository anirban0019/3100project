<!DOCTYPE html>
<html lang="en">
  <head>
    <link
      href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css"
    />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/test_profile.css" />
  </head>
  <!------ Include the above in your HEAD tag ---------->

  <body>
    <header>
    <?php include_once "include/start_session.php" ?>
      <?php include_once "bcknd/profile.php" ?>
      <!-- Header content -->
      <?php include_once "include/navbar.php" ?>
      <!--logout button-->
      <?php include_once "include/logbutton.php"?>
      <!--check user-->
      <?php include_once "include/check_user.php" ?>
      

    </header>
   
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
            <form action="admin/edit_profile.php" method="post">
                <input type="submit" class="profile-edit-btn" id="edit-profile-btn" name="btnEditProfile" value="Edit Profile" />
            </form>
        ';
    }
    ?>
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
                <div class="row">
                  <div class="col-md-6">
                    <label>User Id</label>
                  </div>
                  <div class="col-md-6">
                    <p class="profile-username"><?php echo "$username"?></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>Name</label>
                  </div>
                  <div class="col-md-6">
                    <p class="profile-name"><?php echo "$name"?></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>Email</label>
                  </div>
                  <div class="col-md-6">
                    <p class="profile-email"><?php echo "$email"?></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>Phone</label>
                  </div>
                  <div class="col-md-6">
                    <p><?php echo "$bio"?></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>Profession</label>
                  </div>
                  <div class="col-md-6">
                    <p class="profile-role"><?php echo "$role"?></p>
                  </div>
                </div>
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
