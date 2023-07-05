<?php
// Start session   
include_once "../include/start_session.php";
// Include database connection  
$conn = mysqli_connect("localhost", "root", "", "dynamic");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get username from session variable
$username = $_SESSION['username'];

if (isset($_POST['set_pass'])) {
    $old_pass = mysqli_real_escape_string($conn, $_POST['old_pass']);
    $new_pass = mysqli_real_escape_string($conn, $_POST['new_pass']);
    $confirm_pass = mysqli_real_escape_string($conn, $_POST['confirm_pass']);

    // Validate if old password matches the one in the database
    $sql = "SELECT password FROM user WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $stored_password = $row['password'];

        if (password_verify($old_pass, $stored_password)) {
            // Validate if new password and confirm password match
            if ($new_pass === $confirm_pass) {
                // Hash the new password
                $hashed_password = password_hash($new_pass, PASSWORD_DEFAULT);

                // Update the password in the database
                $update_sql = "UPDATE user SET password = '$hashed_password' WHERE username = '$username'";
                if (mysqli_query($conn, $update_sql)) {
                    // Password updated successfully
                    header("Location: ../edit_profile.php?id=$username&message=Password+updated+successfully");
                    exit();
                } else {
                    // Error updating password
                    header("Location: ../edit_profile.php?id=$username&error=Error+updating+password");
                    exit();
                }
            } else {
                // New password and confirm password do not match
                header("Location: ../edit_profile.php?id=$username&error=New+password+and+confirm+password+do+not+match");
                exit();
            }
        } else {
            // Old password is incorrect
            header("Location: ../edit_profile.php?id=$username&error=Incorrect+old+password");
            exit();
        }
    } else {
        // Error retrieving stored password from the database
        header("Location: ../edit_profile.php?id=$username&error=Error+retrieving+stored+password");
        exit();
    }
}
?>
