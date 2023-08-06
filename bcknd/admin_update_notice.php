<?php 
// Start session
session_start();


// Connect to MySQL
$conn = mysqli_connect("localhost", "root", "", "dynamic");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


if (isset($_POST['submit'])) {
    $title = mysqli_real_escape_string($conn, $_POST['notice_title']);
    $description = mysqli_real_escape_string($conn, $_POST['notice_content']);
    $date = mysqli_real_escape_string($conn, $_POST['notice_date']);
    $time = mysqli_real_escape_string($conn, $_POST['notice_time']);
    $notice_id = mysqli_real_escape_string($conn, $_POST['notice_id']);
    $notice_ext = mysqli_real_escape_string($conn, $_POST['notice_ext']);
    $notice_des = mysqli_real_escape_string($conn, $_POST['notice_des']);
    
    // Check if notice image is uploaded
     if (empty($_FILES['notice_file']['name'])) {
         if($notice_ext)
         {
             $dbdestination = "$notice_des";
         }
         else
         {
             $err= "Please upload a file";
                header("Location: ../admin/edit_notice.php?error=$err");
         }
        } 
        else {

    $file = $_FILES['notice_file'];
    $filename = $file['name'];
    $fileTmp = $file['tmp_name'];
    $fileEXT = explode('.', $filename);
    $fileExtension = strtolower(end($fileEXT));
    
    $allowedExt = array("jpg", "jpeg", "png", "gif", "pdf");
    
    if (in_array($fileExtension, $allowedExt)) {
        if ($file['error'] === 0) {
            $fileSize = $file['size'];
            if ($fileSize < 5000000) { 
                $newFileName = $filename;
                $destination = "../admin/data/notices/$newFileName";
                $dbdestination = "data/notices/$newFileName";
                move_uploaded_file($fileTmp, $destination);
            } else {
                header("Location: ../admin/add_notice.php?message=File+size+exceeds+the+limit");
                exit();
            }
        } else {
            $message = "Error uploading file: " . $file['error'];
            header("Location: ../admin/add_notice.php?message=$message");
            exit();
        }
    } else {
        $msg = "Invalid file extension .". $fileExtension;
        header("Location: ../admin/add_notice.php?message=$msg");
        exit();
    }
}

$sql = "UPDATE notice SET notice_title='$title', notice_content='$description', notice_date='$date', notice_time='$time', notice_file='$dbdestination', notice_ext='$fileExtension' WHERE notice_id='$notice_id'";
$result = mysqli_query($conn, $sql);
    if ($result) {
    header("Location: ../admin/notices.php?message=Notice+updated+successfully");
    exit();
} else {
    header("Location: ../admin/notices.php?error=Error+updating+notice");
    exit();
}
}

// Close MySQL connection
mysqli_close($conn);
?>
