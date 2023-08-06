<!DOCTYPE html>
<html>
<head>
    <title>Student Search</title>
    <link rel="stylesheet" type="text/css" href="css/Searchbar.css">   
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
     <!-- Starting session -->
    <?php include_once "include/start_session.php" ?>
    <?php include_once "include/navbar.php" ?> 
<div class="container">
    <h2>Search</h2>
    <form method="post" class="Search-bar">
        <input type="radio" class="student" name="search_type" value="students" checked> Search Students
        <br>
        <input type="radio"class="teacher" name="search_type" value="teachers"> Search Teachers
        <br><br>
        <input type="text" class="text" name="search" placeholder="Enter your search query">
        <input type="submit" class="text" name="submit" value="Search">
    </form>
    <br>

    <?php include_once "./bcknd/search.php" ?>

    <form method="get" action="show.php">
        <input type="submit" value="Show" name="show">
    </form>
    <form method="get" action="insert.php">
        <input type="submit" value="Insert" name="insert">
    </form>
</div>
</body>
</html>
