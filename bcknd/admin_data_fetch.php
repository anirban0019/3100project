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
//get number of tachers
$teacher_sql = "SELECT * FROM teachers";
$teacher_result = mysqli_query($conn, $teacher_sql);
$teacher_number = mysqli_num_rows($teacher_result);

//get number of students
$student_sql = "SELECT * FROM students";
$student_result = mysqli_query($conn, $student_sql);
$student_number = mysqli_num_rows($student_result);

//get number of classes
$class_sql = "SELECT * FROM class";
$class_result = mysqli_query($conn, $class_sql);
$class_number = mysqli_num_rows($class_result);

//connection close
mysqli_close($conn);
?>