<?php
session_start();
if(!isset($_SESSION['role']) || $_SESSION['role'] != 'teacher') {
    header('Location: login.php');
    exit();
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if any students were selected
    if(isset($_POST['student_select'])) {
        // Retrieve the selected student roll numbers
        $selectedStudents = $_POST['student_select'];

        // Process the selected students
        foreach($selectedStudents as $rollNo) {
            // Perform your desired actions for each selected student
            // For example, you can insert the selected students into another table or perform other operations
            // Here, we're just printing the selected student roll numbers
            echo "Selected student roll number: " . $rollNo . "<br>";
        }
    } else {
        echo "No students selected.";
    }
} else {
    // Redirect to the search page if accessed directly
    header('Location: search.php');
    exit();
}
?>
