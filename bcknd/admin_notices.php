<?php 
// start session
session_start();
if ($_SESSION['role']!= "admin") {
  // if user is not logged in, redirect to login page
  header('location: ../login.php');
}
// Connect to MySQL
$conn = mysqli_connect("localhost", "root", "", "dynamic");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// get notices
$notice_sql = "SELECT * FROM notice";
$notice_result = mysqli_query($conn, $notice_sql);
$notice_number = mysqli_num_rows($notice_result);
?>