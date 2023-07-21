<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <title>All notices</title>
</head>
<body>
<header>
    <!-- <div>
    <?php //include_once "admin_nav.php"; ?>
     -->
</header>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>All notices</h1>
            <hr>
        </div>
    </div>

    <?php include_once "../bcknd/admin_notices.php"; ?>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Notice ID</th>
            <th scope="col">Notice Title</th>
            <th scope="col">Notice Description</th>
            <th scope="col">Notice Date</th>
            <th scope="col">Notice Time</th>
            <th scope="col">Notice File</th>
            <th scope="col">Notice Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($notice_result)) {
            echo "<tr>";
            echo "<td>" . $row['notice_id'] . "</td>";
            echo "<td>" . $row['notice_title'] . "</td>";
            echo "<td>" . $row['notice_content'] . "</td>";
            echo "<td>" . $row['notice_date'] . "</td>";
            echo "<td>" . $row['notice_time'] . "</td>";
            echo "<td>" . $row['notice_file'] . "</td>";
            echo "<td><a href='edit_notice.php?notice_id=" . $row['notice_id'] . "'><button class='btn btn-primary'>Edit</button></a> <a href='delete_notice.php?notice_id=" . $row['notice_id'] . "'><button class='btn btn-danger'>Delete</button></a></td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<div class="row">
        <div class="col-md-12">
            <a href="add_notice.php"><button class="btn btn-primary">Add new notice</button></a>
        </div>
</div>

    
</body>
</html>