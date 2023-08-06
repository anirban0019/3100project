<?php 
// Connect to MySQL
$conn = mysqli_connect("localhost", "root", "", "dynamic");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// get notices
$notice_sql = "SELECT * FROM notice ORDER BY notice_date DESC, notice_time DESC; ";
$notice_result = mysqli_query($conn, $notice_sql);
$notice_number = mysqli_num_rows($notice_result);

// Close MySQL connection
mysqli_close($conn);
?>