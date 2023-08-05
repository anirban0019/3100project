<!DOCTYPE html>
<html>
<head>
    <title>Student Search</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
<?php include_once "include/navbar.php" ?>

<h2>Search for Student by Roll No.</h2>
<form action="bcknd/search.php" class="Search-bar" method="post" target="search_result">
    <input type="text" name="search" placeholder="Enter Roll No.">
    <input type="submit" name="submit" value="Search">
</form>
<br>
<form id="select-all-form">
    <label>Select All</label>
    <input type="checkbox" id="select-all-checkbox">
</form>
<iframe name="search_result" style="border:none;width:100%; height: 500px;"></iframe>
<form method="get" action="show.php">
    <input type="submit" value="Show" name="show">
</form>
<form method="get" action="insert.php">
    <input type="submit" value="Insert" name="insert">
</form>

<script>
    // Get the "Select All" checkbox element
    const selectAllCheckbox = document.getElementById('select-all-checkbox');

    // Get all the student checkboxes
    const studentCheckboxes = document.querySelectorAll('input[name="student_select[]"]');

    // Add event listener to "Select All" checkbox
    selectAllCheckbox.addEventListener('change', function() {
        // Update the state of all student checkboxes based on "Select All" checkbox
        studentCheckboxes.forEach(function(checkbox) {
            checkbox.checked = selectAllCheckbox.checked;
        });

        // Display a message when all students are selected
        const message = selectAllCheckbox.checked ? 'All students selected' : '';
        document.getElementById('select-all-message').textContent = message;
    });

    // Add event listeners to student checkboxes
    studentCheckboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            // Check if all student checkboxes are selected
            const allSelected = Array.from(studentCheckboxes).every(function(checkbox) {
                return checkbox.checked;
            });

            // Update the state of "Select All" checkbox based on all student checkboxes
            selectAllCheckbox.checked = allSelected;

            // Display a message when all students are selected
            const message = allSelected ? 'All students selected' : '';
            document.getElementById('select-all-message').textContent = message;
        });
    });
</script>
</body>
</html>
