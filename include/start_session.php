<?php
// Start session
session_start();

if(isset($_SESSION['username'])){
$pname = $_SESSION['name'];
$uname = $_SESSION['username'];
}
?>