<?php

include_once "../include/db_connect.php";

$sql = "SELECT * FROM notice Where notice_id= $notice_id;";
$notice_result = mysqli_query($conn, $sql);

if($notice_result)
{
    $row = mysqli_fetch_assoc($notice_result);
    $notice_name = $row['notice_title'];
    $notice_content = $row['notice_content'];
    $notice_date = $row['notice_date'];
    $notice_time = $row['notice_time'];
    $notice_des = $row['notice_file'];
    $notice_ext = $row['notice_ext'];
}
else
{
    $error= "Error fetching notice: " . mysqli_error($conn);
    header("location: ../admin/edit_notice.php?error= $error");
}

// Close MySQL connection
mysqli_close($conn);

?>