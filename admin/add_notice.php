<?php include_once "../include/check_admin.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= stylesheet href="../css/bootstrap.min.css">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <title>Add notice</title>
</head>
<body>
<header>
   <?php include_once "../include/alert.php";
   include_once "../include/error.php" ?>
</header>
<div class="container">
<div class="row">
    <div class="col-md-12">
        <h1>Add new notice</h1>
        <hr>
    </div>
</div>
<form method="post" action="../bcknd/add_new.php" enctype="multipart/form-data">
    <div class="form-group">
        <label for="notice_title">Notice Title</label>
        <input type="text" class="form-control" id="notice_title" name="notice_title" placeholder="Enter notice title">
    </div>
    <div class="form-group">
        <label for="notice_content">Notice Description</label>
        <textarea class="form-control" id="notice_content" name="notice_content" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="notice_date">Notice Date</label>
        <input type="date" class="form-control" id="notice_date" name="notice_date">
    </div>
    <div class="form-group">
        <label for="notice_time">Notice Time</label>
        <input type="time" class="form-control" id="notice_time" name="notice_time">
    </div>
    <div class="form-group">
        <label for="notice_file">Notice Image or pdf</label>
        <input type="file" class="form-control" id="notice_file" name="notice_file">
    </div>
    <input type="submit" class="btn btn-primary" value="Submit" name="submit">
</form>
</div> 
</body>
</html>
