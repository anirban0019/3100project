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

    // Check if notice image is uploaded
    if (empty($_FILES['notice_file']['name'])) {
        header("Location: ../admin/add_notice.php?message=Please+upload+an+image+or+pdf");
        exit();
    }

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

    $sql = "INSERT INTO notice (notice_title, notice_content, notice_date, notice_time, notice_file, notice_ext) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "ssssss", $title, $description, $date, $time, $dbdestination, $fileExtension);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("Location: ../admin/notices.php?message=Notice+added+successfully");
        exit();
    } else {
        header("Location: ../admin/notices.php?error=Error+adding+notice");
        exit();
    }
}

// Close MySQL connection
mysqli_close($conn);
?>
