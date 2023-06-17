<?php
// Start session
session_start();

// Connect to MySQL
$conn = mysqli_connect("localhost", "root", "", "dynamic");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get the user's ID from the $_GET['id'] parameter
if (isset($_GET['id'])) {
  $userId = $_GET['id'];
} else {
  // Handle the case when the user ID is not provided
  // You can redirect to an error page or return an appropriate response
  echo "Error: User ID not provided";
  exit();
}

// Get the user's information from the database based on the ID
$user_sql = "SELECT * FROM user WHERE username='$userId'";
$user_result = mysqli_query($conn, $user_sql);

if (mysqli_num_rows($user_result) == 1) {
  // Fetch the user's information
  $user_row = mysqli_fetch_assoc($user_result);
  $name = $user_row['name'];
  $email = $user_row['email'];
  $username = $user_row['username'];

  // Retrieve additional user details based on the role
  $role = $_SESSION['role'];
  if ($role == 'student') {
    $student_sql = "SELECT * FROM students WHERE username='$username'";
    $student_result = mysqli_query($conn, $student_sql);

    if (mysqli_num_rows($student_result) == 1) {
      $student_row = mysqli_fetch_assoc($student_result);
      $profile_picture = $student_row['profile_picture'];
      $bio = $student_row['bio'];
      $field_of_research = $student_row['field_of_research'];
    }
  } else {
    $teacher_sql = "SELECT * FROM teachers WHERE username='$username'";
    $teacher_result = mysqli_query($conn, $teacher_sql);

    if (mysqli_num_rows($teacher_result) == 1) {
      $teacher_row = mysqli_fetch_assoc($teacher_result);
      $profile_picture = $teacher_row['profile_picture'];
      $bio = $teacher_row['bio'];
      $field_of_research = $teacher_row['field_of_research'];
      $role = "teacher";
    }
  }

  // Prepare the user profile data as an array
 echo "name = $name.<br>";
 echo "username = $username.<br>";
 echo "bio = $bio.<br>";
 echo "profession = $role.<br>";
// Close MySQL connection
mysqli_close($conn);
}
?>
