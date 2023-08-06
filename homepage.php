<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Custom CSS-->
    <link rel="stylesheet" href="css/stylehomepage.css">
    <title>Home</title>
</head>

<body>
<header>
      <!-- starting session -->
      <?php include_once "include/start_session.php" ?>
      <!-- navbar -->
      <?php include_once "include/navbar.php" ?>
      
    </header>
    <!--Carousel Start-->
    <section class="hero" id="hero">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-backgroud">
                        <img src="./img/background.jpg" alt="">
                        <div class="carousel-container">
                            <div class="carousel-content-container">
                                <h2>Computer Science & Engineering</h2>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Doloribus quo cum iusto.
                                    Sit praesentium aliquam magni ducimus commodi ipsa nobis dolore inventore nostrum
                                    nam?
                                    Illum ut cumque rerum eligendi id repellat iure architecto odit?</p>
                                <div class="buttons">
                                    <a href="" class="button1">Learn More</a>
                                    <a href="" class="button1">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-backgroud">
                        <img src="./img/background.jpg" alt="">
                        <div class="carousel-container">
                            <div class="carousel-content-container">
                                <h2>Our Achivements</h2>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Doloribus quo cum iusto.
                                    Sit praesentium aliquam magni ducimus commodi ipsa nobis dolore inventore nostrum
                                    nam?
                                    Illum ut cumque rerum eligendi id repellat iure architecto odit?</p>
                                <div class="buttons">
                                    <a href="" class="button1">Learn More</a>
                                    <a href="" class="button1">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!--Carousel End-->



    <!--Feature Info Section Start-->
    <section class="feature mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="main-feature-box">
                        <div class="icon">
                            <i class="bi bi-house-door-fill"></i>
                        </div>
                        <h3>Facilities</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet, sed aliquam. Neque
                            perferendis similique nisi repellendus voluptatibus asperiores aut exercitationem!

                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="main-feature-box">
                        <div class="icon">
                            <i class="bi bi-house-door-fill"></i>
                        </div>
                        <h3>Labs</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet, sed aliquam. Neque
                            perferendis similique nisi repellendus voluptatibus asperiores aut exercitationem!

                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="main-feature-box">
                        <div class="icon">
                            <i class="bi bi-house-door-fill"></i>
                        </div>
                        <h3>Projects</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet, sed aliquam. Neque
                            perferendis similique nisi repellendus voluptatibus asperiores aut exercitationem!

                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="main-feature-box">
                        <div class="icon">
                            <i class="bi bi-house-door-fill"></i>
                        </div>
                        <h3>Events</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet, sed aliquam. Neque
                            perferendis similique nisi repellendus voluptatibus asperiores aut exercitationem!

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Feature Info Section End-->

    <!--Course Section Start -->
    <section class="course">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 d-none d-lg-flex">
                    <img src="./img/cse.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-6">
                    <div class="course-content">
                        <span>Courses In CSE </span>
                        <h2>CSE 1201: Object Oriented Programming</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi autem omnis expedita minus
                            error, quidem aut.</p>
                        <div class="buttons">
                            <a href="" class="button3">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Course Section End-->
    <!--Teacher's Introduction Start-->
    <section class="teachers mt-5 mb-5">
        <div class="container">
            <div class="row">
                <h2 class="text-center">Our Faculty</h2>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="teachers-box border">
                        <div class="icon">
                            <img src="./img/boshir sir.jpg" height="60px" class="img-fluid" alt="">
                        </div>
                        <h3>Prof. Dr. Boshir Ahmed</h3>
                        <p>Boshir Ahmed is a Dhaka native and he is working as a faculty member in the department of
                            Computer Science & Engineering, Rajshahi University of Engineering & Technology since 24th
                            June 2001. In addition to this role, he is professor of this Department, with research
                            interests in image/video analysis and Computer vision. In this service period, he took
                            active part in postgraduate & undergraduate academic programs of this department and also
                            have got the opportunity to conduct and supervise different research projects.</p>
                        <div class="buttons">
                            <a href="" class="button3">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="teachers-box border">
                        <!-- <h2>Head Of the Department</h2> -->
                        <div class="icon">
                            <img src="./img/al mamun sir.jpg" height="60px" class="img-fluid" alt="">
                        </div>
                        <h3>Prof. Dr. Md. Al Mamun</h3>
                        <p>My teaching interests are inseparably conjoined with my research ambitions. My research
                            objective was to gain a deep and clear understanding and to establish a successful career
                            record as a researcher in image/video analysis, data mining, and computer vision. I
                            completed BSc in Computer Science & Engineering in 2005 and PhD in Computer Science in 2011.
                            In terms of professional experiences, I worked in reputed national and multinational
                            organizations with outstanding track records. In every position, I showed outstanding
                            analytical and problem solving skills, abilities to work as a part of team with minimal
                            supervision.</p>
                        <div class="buttons">
                            <a href="" class="button3">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="teachers-box border">
                        <div class="icon">
                            <img src="./img/Shahiduzzaman sir.jpg" height="50px" class="img-fluid" alt="">
                        </div>
                        <h3>Prof. Dr. Md. Shahid Uz Zaman</h3>
                        <p>Md. Shahid Uz Zaman received B.Sc Degree in EEE from the Department of Electrical &
                            Electronic Engineering, RUET Bangladesh in 1989, M.Sc degree in Computer Engineering from
                            Shanghai University , China in 1997 and Ph.D degree in Information Engineering from the
                            Department of Information Engineering, University of the Ryukyus, Janan in 2004. He joined
                            as a lecturer in the Department of Electrical & Electronic Engineering, RUET in1991. In
                            2008, he became Professor in the Department of Computer Science & Engineering, RUET. He was
                            appointed as an associate professor in the faculty of Computer Science and Information
                            Technology, University of Malaysia Sarawak, Malaysia from March, 2011 to March, 2013.</p>
                        <div class="buttons">
                            <a href="" class="button3">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Teacher's Introduction End-->
    <!--Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>