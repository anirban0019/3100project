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

if (isset($_POST['submit'])) {
    $file = $_FILES['profile_pic'];
    $filename = $file['name'];
    $fileType = $file['type'];
    $fileTmp = $file['tmp_name'];
    $fileEXT = explode('.', $filename);
    $fileExtension = strtolower(end($fileEXT));
    
    $allowedExt = array("jpg", "jpeg", "png", "gif");
    
    if (in_array($fileExtension, $allowedExt)) {
        if ($file['error'] === 0) {
            $fileSize = $file['size'];
            if ($fileSize < 5000000) {
                $newFileName = uniqid('', true) . '.' . $fileExtension;
                $destination = "../img/profile_pics/$newFileName";
                $dbdestination = "img/profile_pics/$newFileName";
                move_uploaded_file($fileTmp, $destination);
                $sql = "UPDATE $table SET `profile_picture`='$dbdestination' WHERE `username`='$username';";
                if (mysqli_query($conn, $sql)) {
                    header("Location: ../edit_profile.php?id=$username&message=Profile+Picture+Updated");
                    exit();
                } else {
                    echo "Error updating profile picture: " . mysqli_error($conn);
                }
            } else {
                header("Location: ../edit_profile.php?id=$username&message=File+size+exceeds+the+limit");
            }
        } else {
            $message="Error uploading file: " . $file['error'];
            header ("Location: ../edit_profile.php?id=$username&message=$message");
        }
    } else {
        $msg="Invalid file extension.";
        header ("Location: ../edit_profile.php?id=$username&message=$msg");
    }
}
// Close MySQL connection
mysqli_close($conn);
?>
