<?php
// Start session
session_start();

// Connect to MySQL
$conn = mysqli_connect("localhost", "root", "", "dynamic");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get input values and escape special characters
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Prepare SQL query for user table
$user_sql = "SELECT * FROM user WHERE username='$username'";

// Execute query for user table
$user_result = mysqli_query($conn, $user_sql);

// Check if query returned a row in user table
if (mysqli_num_rows($user_result) == 1) {
  // Fetch the row from user table
  $user_row = mysqli_fetch_assoc($user_result);

  // Verify the password
  if (password_verify($password, $user_row['password'])) {
    // Successful login
    $_SESSION['username'] = $username; // Set session variable
    $_SESSION['name'] =$user_row['name']; // Set session variable
    $_SESSION['role'] = $user_row['role']; // Set session variable

    if ($user_row['role'] == 'admin') {
      // Redirect to admin.php for admin with message
      header("Location: ../admin/control_panel.php");
      exit(); // Exit script
    }
    else{
      // Redirect to profile.php for user with message
      header("Location: ../profile.php?id=" . urlencode($username));
      exit(); // Exit script
    }
  } else {
    // Failed login
    echo "Incorrect password";
  }
} else {
  // Failed login
  echo "Incorrect username";
}

// Close MySQL connection
mysqli_close($conn);
?>
