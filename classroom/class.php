<!DOCTYPE html>
<html>
<head>
    <title>Classroom</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css>
    <style>
        .container {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Classroom</h1>
        
        <!-- Add Students -->
        <h3>Add Students</h3>
        <form action="add_students.php" method="post">
            <div class="form-group">
                <label for="student-name">Student Name:</label>
                <input type="text" class="form-control" id="student-name" name="student_name" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Student</button>
        </form>
        
        <!-- Post Notice -->
        <h3>Post Notice</h3>
        <form action="post_notice.php" method="post">
            <div class="form-group">
                <label for="notice-title">Title:</label>
                <input type="text" class="form-control" id="notice-title" name="notice_title" required>
            </div>
            <div class="form-group">
                <label for="notice-content">Content:</label>
                <textarea class="form-control" id="notice-content" name="notice_content" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Post Notice</button>
        </form>
        
        <!-- Send Message -->
        <h3>Send Message</h3>
        <form action="send_message.php" method="post">
            <div class="form-group">
                <label for="message-recipients">Recipients:</label>
                <select multiple class="form-control" id="message-recipients" name="message_recipients[]" required>
                    <option value="student1">Student 1</option>
                    <option value="student2">Student 2</option>
                    <option value="student3">Student 3</option>
                    <!-- Add more students as options -->
                </select>
            </div>
            <div class="form-group">
                <label for="message-content">Message:</label>
                <textarea class="form-control" id="message-content" name="message_content" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
        
        <!-- Manage Assignments -->
        <h3>Manage Assignments</h3>
        <ul>
            <li><a href="assignment1.pdf">Assignment 1</a></li>
            <li><a href="assignment2.pdf">Assignment 2</a></li>
            <li><a href="assignment3.pdf">Assignment 3</a></li>
            <!-- Add more assignments -->
        </ul>
    </div>

    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
