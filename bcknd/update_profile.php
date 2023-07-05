<?php
include_once "../include/start_session.php";
$username = $_SESSION['username'];
$role = $_SESSION['role'];
// Connect to MySQL
$conn = mysqli_connect("localhost", "root", "", "dynamic");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if ($role == "student") {
  $table = "students";
} else {
  $table = "teachers";
}



if(isset($_POST['info_submit'])){
  if(isset($_POST['name'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
  }
  if(isset($_POST['email'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
  }
  if(isset($_POST['bio'])){
    $bio = mysqli_real_escape_string($conn, $_POST['bio']);
  }
  if(isset($_POST['mobile'])){
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
  }
  if(isset($_POST['address'])){
    $address = mysqli_real_escape_string($conn, $_POST['address']);
  }
}

  if ($role == "student") {
    $roll_no = mysqli_real_escape_string($conn, $_POST['roll_no']);
    $sql = "UPDATE $table SET `name`='$name', `roll_no`='$roll_no', `email`='$email', `bio`='$bio', `mobile`='$mobile', `address`='$address' WHERE `username`='$username';";
    $sql2 = "UPDATE user SET `name`='$name', `email`='$email' WHERE `username`='$username';";
  }
  else{
  $sql = "UPDATE $table SET `name`='$name', `email`='$email', `bio`='$bio', `mobile`='$mobile', `address`='$address' WHERE `username`='$username';";
  $sql2 = "UPDATE user SET `name`='$name', `email`='$email' WHERE `username`='$username';";
  }
  if (mysqli_query($conn, $sql)&& mysqli_query($conn, $sql2)) {
    header("Location: ../edit_profile.php?id=$uname&message=Profile+Updated");
    exit();
  } else {
    echo "Error updating profile: " . mysqli_error($conn);
  }

?>

<!-- Add any additional HTML content here if needed -->
