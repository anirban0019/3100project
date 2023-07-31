<?php
$notice_id = $_POST['notice_id'];
include_once "../include/db_connect.php";

// delete notice

$delete_notice_sql = "DELETE FROM notice WHERE notice_id = '$notice_id'";
$del_notice = mysqli_query($conn,$delete_notice_sql);
if ($del_notice) {
    $msg="Notice deleted";
    header("location: ../admin/notices.php?message= $msg");
}
else {
$error= "Error deleting notice: " . mysqli_error($conn);
header("location: ../admin/notices.php?error= $error");
}

// Close MySQL connection
mysqli_close($conn);

?>