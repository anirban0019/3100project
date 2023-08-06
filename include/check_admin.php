<?php
// Start session
session_start();
// Check if user is logged in
if(isset($_SESSION['username'])){
    $pname = $_SESSION['name'];
    $uname = $_SESSION['username'];
    }
if($_SESSION['role']!="admin"){
    header("location:../homepage.php");
}
?>