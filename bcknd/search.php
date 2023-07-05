<?php

if (isset($_POST['submit'])) {
    $searchType = $_POST['search_type'];
    $search = $_POST['search'];
    $conn = mysqli_connect("localhost", "root", "", "dynamic");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if ($searchType == "students") {
        $sql = "SELECT id, username, name, mobile, department, email, address, roll_no
                FROM students
                WHERE roll_no LIKE '%$search%'
                      OR department LIKE '%$search%'
                      OR name LIKE '%$search%'
                      OR mobile LIKE '%$search%'";
    } else {
        $sql = "SELECT id, username, name, mobile, department, email, address
                FROM teachers
                WHERE department LIKE '%$search%'
                      OR name LIKE '%$search%'
                      OR mobile LIKE '%$search%'";
    }

    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);
    if (!isset($_SESSION['role'])) {
        $_SESSION['role'] = "student"; {
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Search</title>
    <link rel="stylesheet" type="text/css" href="../css/style2.css">
</head>
<body>
    <?php if (isset($_POST['submit'])): ?>
        <?php if (mysqli_num_rows($result) > 0): ?>
            <table style="border: 1px solid black; width: 100%;">
                <thead>
                    <tr>
                        <?php if ($searchType == "students"): ?>
                            <?php if ($_SESSION['role'] == "teacher"): ?>
                                <th>Select</th>
                            <?php endif; ?>
                            <th>Roll No.</th>
                        <?php endif; ?>
                        <th>Name</th>
                        <th>Mobile Number</th>
                        <th>Department</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>View Profile</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <?php if ($searchType == "students"): ?>
                                <?php if ($_SESSION['role'] == "teacher"): ?>
                                    <td>
                                        <input type="checkbox" name="student_select[]" value="<?php echo $row['id']; ?>">
                                    </td>
                                <?php endif; ?>
                                <td><?php echo $row['roll_no']; ?></td>
                            <?php endif; ?>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['mobile']; ?></td>
                            <td><?php echo $row['department']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td>
                                <a href="profile.php?id=<?php echo $row['username']; ?>">View Profile</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <?php if ($searchType == "students" && $_SESSION['role'] == "teacher"): ?>
                <br>
                <input type="checkbox" id="select-all-checkbox" onchange="toggleSelectAll()"> Select All
                <br>
                <input type="submit" value="Process Selected Students">
            <?php endif; ?>
            <script>
                function toggleSelectAll() {
                    const checkboxes = document.querySelectorAll('input[name="student_select[]"]');
                    const selectAllCheckbox = document.getElementById('select-all-checkbox');

                    checkboxes.forEach(function(checkbox) {
                        checkbox.checked = selectAllCheckbox.checked;
                    });
                }
            </script>
        <?php else: ?>
            <p>No record found</p>
        <?php endif; ?>
    <?php endif; ?>
</body>
</html>
