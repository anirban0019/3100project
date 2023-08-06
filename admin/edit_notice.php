<?php include_once "../include/check_admin.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= stylesheet href="../css/bootstrap.min.css">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Add these script tags in the head section of your HTML file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.8.335/pdf.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.8.335/pdf.worker.js"></script>
    <title>Edit notice</title>
</head>
<body>
<header>
   <?php include_once "../include/alert.php";
   include_once "../include/error.php";
   include_once "../bcknd/notice_data_fetch.php"; ?>
</header>
<div class="container">
<div class="row">
    <div class="col-md-12">
        <h1>Edit notice</h1>
        <hr>
    </div>
</div>
<form method="post" action="../bcknd/admin_update_notice.php" enctype="multipart/form-data">
    <div class="form-group">
        <label for="notice_title">Notice Title</label>
        <input type="text" class="form-control" id="notice_title" name="notice_title" value="<?php echo "$notice_name"; ?>">
    </div>
    <div class="form-group">
        <label for="notice_content">Notice Description</label>
        <textarea class="form-control" id="notice_content" name="notice_content" rows="3"><?php echo "$notice_content"; ?></textarea>
    </div>
    <div class="form-group">
        <label for="notice_date">Notice Date</label>
        <input type="date" class="form-control" id="notice_date" name="notice_date" value="<?php echo $notice_date; ?>">
    </div>
    <div class="form-group">
        <label for="notice_time">Notice Time</label>
        <input type="time" class="form-control" id="notice_time" name="notice_time" value="<?php echo $notice_time; ?>">
    </div>
    <div class="form-group">
        <label for="notice_file">Notice Image or pdf</label><br>
        <a href="<?php echo "$notice_file"; ?>" >View exisiting file</a>
        <embed src="<?php echo "$notice_file"; ?>" width="200" height="200" type="application/pdf">
        <object data="<?php echo $notice_file; ?>" type="application/pdf" width="500" height="375">
    <p>PDF cannot be displayed. <a href="<?php echo $notice_file; ?>">Download PDF</a></p>
</object>

        
        <input type="file" class="form-control" id="notice_file" name="notice_file">
    </div>
    <input type="submit" class="btn btn-primary" value="Submit" name="submit">
</form>
</div> 
</body>
</html>
