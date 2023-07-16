
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/navbar.css">
</head>

<body>
    <!--Nav bar start-->
    <header>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="../img/Ruet.png" width="50px" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./homepage.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Notice</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Contact</a>
                        </li>
                       
                        <li  class="nav-item">
                        <?php
                        // Check if user is logged in
                        if (!isset($_SESSION['username'])) {
                            echo '<div style="position: absolute; right: 10px">
                                <form method="post" action="../login.php">
                                <input type="submit" value="Log in" name="login" />
                                </form>
                                </div>';
                            }
                        else{
                            echo '<div style="position: absolute; right: 10px">
                             <form method="post" action="../bcknd/logout.php">
                              <input type="submit" value="Logout" name="logout" />
                             </form>
                             </div>';}
?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>