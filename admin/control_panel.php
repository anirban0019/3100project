<?php include_once "../include/check_admin.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/admin_dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
</head>
<body>
    <header>
    <?php include_once "../bcknd/admin_data_fetch.php";
    include_once "admin_nav.php"; ?>
    </header>
<div class="container-fluid">
        <div class="row">
            <div class="col-md-3 sidebar" style="margin-top: 40px;">
                <h4>Admin Dashboard</h4>
                <ul>
                    <li><a href="notices.php">Notices</a></li>
                    <li><a href="achievements.php">Achievements</a></li>
                    <li><a href="classes.php">Classes</a></li>
                    <!-- Add more sidebar items as needed -->
                </ul>
            </div>
            <div class="col-md-9 content" style="margin-top: 25px;">
                <div class="jumbotron">
                    <h2><center>Welcome, Admin!</center></h2>
                    <p><center>This is the admin dashboard. Choose an option from the sidebar to manage different aspects of the system.</center></p>
                </div>
                <!-- Add your additional content here -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card card-blue">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <h4 class="mb-0">Teachers</h4>
                                    </div>
                                    <div class="icon-shape icon-md bg-light-primary text-primary rounded-2">
                                        <i class="fas fa-chalkboard-teacher"></i>
                                    </div>
                                </div>
                                <div>
                                    <h1 class="fw-bold"><?php echo "$teacher_number" ?></h1>
                                    <p class="mb-0">
                                        
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card card-green">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <h4 class="mb-0">Students</h4>
                                    </div>
                                    <div class="icon-shape icon-md bg-light-primary text-primary rounded-2">
                                        <i class="fas fa-user-graduate"></i>
                                    </div>
                                </div>
                                <div>
                                    <h1 class="fw-bold"><?php echo "$student_number" ?></h1>
                                    <p class="mb-0">
                                        <!-- <span class="text-dark me-2">28</span> Completed -->
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card card-yellow">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <h4 class="mb-0">Classes</h4>
                                    </div>
                                    <div class="icon-shape icon-md bg-light-primary text-primary rounded-2">
                                        <i class="fas fa-chalkboard"></i>
                                    </div>
                                </div>
                                <div>
                                    <h1 class="fw-bold"><?php echo "$class_number" ?></h1>
                                    <p class="mb-0">
                                        <!-- <span class="text-dark me-2">1</span> Completed -->
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card card-red">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <h4 class="mb-0">Productivity</h4>
                                    </div>
                                    <div class="icon-shape icon-md bg-light-primary text-primary rounded-2">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                </div>
                                <div>
                                    <h1 class="fw-bold">76%</h1>
                                    <p class="mb-0">
                                        <!-- <span class="text-dark me-2">5%</span> Completed -->
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>
