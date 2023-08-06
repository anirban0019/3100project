<?php include_once "../include/check_admin.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="../css/navbar.css"> -->
    <title>All notices</title>
    <!-- <link rel="stylesheet" href="../css/admin_notice.css"> -->
</head>
<body >
    <header>
        <?php 
        include_once "admin_nav.php";
        include_once "../include/error.php";
        include_once "../include/alert.php" ?>
    </header>
    <div class="container" >
        <div class="row" >
            <div class="col-md-12"style="margin-top: 100px;">
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
                    echo "<td><a href='" . $row['notice_file'] . "'>" . $row['notice_file'] . "</a></td>";
                    echo "<td><a href='edit_notice.php?notice_id=" . $row['notice_id'] . "'><button class='btn btn-primary'>Edit</button></a>
                    <button class='btn btn-danger' id='delete_notice' onclick='show_del()'>Delete</button></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <div>
            <dialog id="delete_notice_dialog">
                <form action="../bcknd/delete_notice.php" method="post">
                    <input type="hidden" name="notice_id" id="notice_id">
                    <h3>Are you sure you want to delete this notice?</h3>
                    <button type="submit" class="btn btn-danger">Yes</button>
                    <button type="button" class="btn btn-primary" id="cancel_delete">No</button>
                </form>
            </dialog>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="add_notice.php"><button class="btn btn-primary">Add new notice</button></a>
            </div>
        </div>
    </div>
    <script>
        function show_del() {
            document.getElementById('delete_notice_dialog').showModal();
        }
        document.getElementById('cancel_delete').addEventListener('click', function() {
            document.getElementById('delete_notice_dialog').close();
        });
        $(document).ready(function() {
            $('#delete_notice').click(function() {
                var notice_id = $(this).closest('tr').find('td:eq(0)').text();
                $('#notice_id').val(notice_id);
            });
        });
    </script>
</body>
</html>
