<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CYRSVT9E0J"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-CYRSVT9E0J');
    </script>
    <meta charset="utf-8">
    <title>Mystik Minds - Home</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">

        <div class="top-bar text-white-50 row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start align-items-center">
                <!-- <small>
                    <a class="navbar-brand" href="#">
                        <img src="./img/mmlogo.png" alt="" width="60" height="40" class="d-inline-block align-text-top">
                    </a>
                </small> -->
                <!-- <small class="ms-4"><i class="fa fa-envelope me-2"></i>info@mystikminds.com</small> -->
                <a class="ms-4 h-100" href="universities.php">For Universities</a>
                <a class="ms-4 h-100" href="recruiters.php">For Recruiters</a>
                <a class="ms-4 h-100" href="teachers.php">For Teachers</a>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Follow us:</small>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-twitter"></i></a>
                <a class="text-white-50 ms-3" href="https://www.linkedin.com/company/mystik-minds/"><i class="fab fa-linkedin-in"></i></a>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="fw-bold text-primary m-0">Mystik<span class="text-white">Minds</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-4 mb-3" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="input-group search-bar">
                <input type="search" class="form-control" placeholder="Explore new courses" aria-label="Search" aria-describedby="search-addon" />
                <span class="input-group-text border-0 btn-primary" id="search-addon">
                    <i class="fas fa-search"></i>
                </span>
            </div>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu m-0">
                            <a href="service.php" class="dropdown-item">All Service</a>
                            <a href="servicelineai.php" class="dropdown-item">No-Code AI</a>
                            <a href="serviceline1.php" class="dropdown-item">360 Competency Evaluation</a>
                            <a href="serviceline2.php" class="dropdown-item">Curriculum Design</a>
                            <a href="serviceline3.php" class="dropdown-item">Technology Evangelisation</a>
                            <a href="serviceline4.php" class="dropdown-item">Academic Assessments</a>
                        </div>
                    </div>
                    <a href="blogs.php" class="nav-item nav-link">Blogs</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>

                    <!-- Login / Logout start-->
                    <div class="nav-item  dropdown">
                        <?php
                        if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {
                        ?>
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> <?php echo $_SESSION['first_name'] ?></a>
                            <div class="dropdown-menu dropdown-menu-end m-0">
                                <li><a class="dropdown-item " href="logout.php">Logout</a></li>
                                <li><a class="dropdown-item" href="mycourses.php">My Courses <span>(<?php echo count($_SESSION['courses_enrolled']); ?>)</span></a></li>
                            </div>
                        <?php
                        } else {
                        ?>
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">My MMPL</a>
                            <div class="dropdown-menu dropdown-menu-end m-0">
                                <li><a class="dropdown-item " href="register.php">Register</a></li>
                                <li><a class="dropdown-item" href="login.php">Login</a></li>
                                <li><a class="dropdown-item" href="teachers.php">For Teachers</a></li>
                                <li><a class="dropdown-item" href="recruiters.php">For Recruiters</a></li>
                                <li><a class="dropdown-item" href="universities.php">For Universities</a></li>

                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <!-- Login / Logout end-->
                </div>
            </div>
        </nav>
    </div>

    <!-- Navbar End -->
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5 mt-sm-0 mt-5">
                                    <h1 class="display-6 display-sm-7 text-white mb-3 animated slideInDown">Integrate AI in your domain area without writing even a single line of code.</h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown "><b>AI in Agriculture /
                                            Engineering / Management</b><br><b>AI in all real life domains</b><br><b>No
                                            Coding Skills required</b></p>
                                    <a class="btn btn-primary py-2 px-3 animated slideInDown" href="servicelineai.php">
                                        Learn More
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- New Pic Added -->
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5 mt-sm-0 mt-5">
                                    <h1 class="display-6 display-sm-7 text-white mb-3 animated slideInDown">360 Degree Competency
                                        Evaluation</h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown"><b>Employability Score</b>
                                        for Students<br><b>Industry Alignment Score</b> for Faculty<br><b>Industry
                                            Readiness Score</b> for University</p>
                                    <a class="btn btn-primary py-2 px-3 animated slideInDown" href="serviceline1.php">
                                        Learn More
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- New Pic Added -->

                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5 mt-sm-0 mt-5">
                                    <h1 class="display-6 display-sm-7 text-white mb-3 animated slideInDown">Industry Ready Curriculum
                                        Design</h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown"><b>21st Century Skills
                                            Aligned Curriculum</b><br><b>AI & Design Thinking Integrated
                                            Curriculum</b><br><b>Industry Usecase Integrated Curriculum</b></p>
                                    <a class="btn btn-primary py-2 px-3 animated slideInDown" href="serviceline2.php">
                                        Learn More
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xl py-5 bg-secondary rounded border shadow p-3 rounded">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100 pt-5 pe-5" src="img/about-1.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2 border border-primary" src="img/about-2.jpg" alt="" style="width: 200px; height: 200px;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-0 mb-3">About Us</div>
                        <h1 class="display-6 mb-5">We Help Students Meet Their Career Aspirations</h1>
                        <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                            <p class="text-dark mb-2">Universities and Faculty must align their efforts with the Career
                                Aspirations of Students in order to prepare Industry Ready Graduates on their campuses
                            </p>
                            <span class="text-primary">Dr Manoj Manuja, Founder, Mystik Minds</span>
                        </div>
                        <p class="mb-4">Mystik Minds has been conceptualised to bridge the gap between Industry and
                            Academia where the universities and faculty "Pull" the career aspirations of students
                            instead of "Pushing" their thoughts on students while preparing them for industry.</p>
                        <a class="btn btn-primary py-2 px-3 me-3 mt-2 mt-sm-0" href="about.php">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                        <a class="btn btn-outline-primary py-2 px-3 mt-2 mt-sm-0" href="contact.php">
                            Contact Us
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Vision & Mission Start -->
    <div class="container-xxl bg-secondary my-5 py-5 rounded border shadow p-3 rounded">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Vision & Mission</div>
                <h1 class="display-6 mb-5">Meet Your Career Aspirations</h1>
            </div>
            <div class="row text-center justify-content-center mx-auto mb-5 wow fadeInUp">
                <div class="col-lg-6 col-xl-6">
                    <div class="image-container d-flex align-items-center justify-content-center">
                        <img class="img-fluid rounded border shadow p-3 rounded bg-white" src="img/mission.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-5 mt-5 mt-md-0 d-flex align-items-center justify-content-center">
                    <div class="text-container">
                        <h2>Prototype With Revo</h2>
                        <p>Our experienced designers and developers have implemented cutting edge tools that will help
                            you sketch your ideas in record time and prepare the design</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><strong>Use a single app</strong> to get from sketch to actual
                                    code</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><strong>Bundled templates</strong> to help you get inspired
                                    faster</div>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div>
            <div class="row text-center justify-content-center mx-auto mb-0 wow fadeInUp">
                <div class="col-lg-6 col-xl-6 order-lg-2">
                    <div class="image-container d-flex align-items-center justify-content-center">
                        <img class="img-fluid rounded border shadow p-3 rounded bg-white" src="img\vision.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-5 mt-5 mt-md-0 d-flex align-items-center justify-content-center">

                    <!-- Tabs Content -->
                    <div class="text-container">
                        <h2>Prototype With Revo</h2>
                        <p>Our experienced designers and developers have implemented cutting edge tools that will help
                            you sketch your ideas in record time and prepare the design</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><strong>Use a single app</strong> to get from sketch to actual
                                    code</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><strong>Bundled templates</strong> to help you get inspired
                                    faster</div>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                    <!-- end of tabs content -->

                </div> <!-- end of col -->
            </div>

            <!-- <div class="row g-4 justify-content-center">
                                                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                                                        
                                                        <div class="text-center p-4 pt-0 border border-primary">
                                                            <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                                                <small>Vision</small>
                                                            </div>
                                                            <div class="position-relative mt-auto">
                                                                <img class="img-fluid" src="img/vision.jpg" alt="">
                                                                
                                                            </div>
                            <h5 class="mb-3">Enhance Employability Skills of the Students</h5>
                            <h5 class="mb-3">Align Faculty with Industry Standards</h5>
                            <h5 class="mb-3">Transform University in line with Industry</h5>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                        <div class="text-center p-4 pt-0 border border-primary">
                            <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>Mission</small>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="img/mission.jpg" alt="">
                            </div>
                            <h5 class="mb-3">21st Century Ready Students</h5>
                            <h5 class="mb-3">Industry Aligned Faculty</h5>
                            <h5 class="mb-3">Industry Ready University</h5>
                            
                        </div>
                        
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- Vision & Mission End -->


    <!-- Service Start -->
    <div class="container-xxl py-4 bg-secondary rounded border shadow p-3 rounded">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">What We Do</div>
                <h1 class="display-6 mb-5">Learn More What We Do And Get Involved</h1>
            </div>
            <div class="row g-4 justify-content-center mb-4">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5 border border-primary rounded border shadow p-3 rounded">
                        <img class="img-fluid mb-4" src="img/icon-1.png" alt="">
                        <h4 class="mb-3">No-Code AI Evangelisation</h4>
                        <p class="mb-4">No-Code Evangelisation for non-CSE Students and industry professionals.</p>
                        <a class="btn btn-outline-primary px-3" href="servicelineai.php">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5 border border-primary rounded border shadow p-3 rounded">
                        <img class="img-fluid mb-4" src="img/icon-1.png" alt="">
                        <h4 class="mb-3">Competency Evaluation</h4>
                        <p class="mb-4">Bridging the Gap Between University Education and Students' Career Aspirations
                        </p>
                        <a class="btn btn-outline-primary px-3" href="serviceline1.php">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5 border border-primary rounded border shadow p-3 rounded">
                        <img class="img-fluid mb-4" src="img/icon-1.png" alt="">
                        <h4 class="mb-3">Industry Ready Curriculum Design</h4>
                        <p class="mb-4">Design and develop curricula that are aligned with the latest industry trends,
                            technologies, and practices.</p>
                        <a class="btn btn-outline-primary px-3" href="serviceline2.php">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5 border border-primary rounded border shadow p-3 rounded">
                        <img class="img-fluid mb-4" src="img/icon-1.png" alt="">
                        <h4 class="mb-3">Academic Assessments</h4>
                        <p class="mb-4">A complete suite of industry-created independent “Academic Assessments” for a
                            given program.</p>
                        <a class="btn btn-outline-primary px-3" href="serviceline4.php">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- News & Updates Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3 ">Latest @ Mystik Minds
                </div>
                <h1 class="display-6 mb-5">News & Updates</h1>
            </div>
        </div>
        <div class="container bg-secondary rounded border shadow p-4 mb-5 rounded">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5 border border-primary">
                        <img class="img-fluid mb-4" src="img/icon-1.png" alt="">
                        <h4 class="mb-3">No-Code AI for Everyone</h4>
                        <p class="mb-4" style="text-align: justify;color: black;">No-Code AI evangelization for students
                            as well as industry working professionals from diverse fields like Agriculture,
                            Pharmaceutical Science, Business Management, Commerce, Liberal Arts etc. to effortlessly
                            embrace artificial intelligence without the need for coding expertise.</p>
                        <a class="btn btn-outline-primary px-3" href="servicelineai.php">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5 border border-primary">
                        <img class="img-fluid mb-4" src="img/icon-1.png" alt="">
                        <h4 class="mb-3">Minor Specialisation in No-Code AI</h4>
                        <p class="mb-4" style="text-align: justify;color: black;">Industry-ready, industry-aligned,
                            industry-created and industry-reviewed curriculum on no-Code AI as minor specialisation for
                            Non-Computer Science Programs like Agriculture, Pharamcy, MBA, Commerce and Liberal arts
                            students.</p>
                        <a class="btn btn-outline-primary px-3" href="news.php">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5 border border-primary">
                        <img class="img-fluid mb-4" src="img/icon-1.png" alt="">
                        <h4 class="mb-3">360 Degree Industry Readiness Insights</h4>
                        <p class="mb-4" style="text-align: justify;color: black;">Get a holistic 360 degree insights
                            into your department's Industry Readiness through competency assessment of students,
                            integrated with industry readiness index for the faculty and the university. </p>
                        <a class="btn btn-outline-primary px-3" href="serviceline1.php">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- News & Updates End -->

    <!-- Contact Form Start -->
    <div class="container-fluid donate my-5 py-5" data-parallax="scroll" data-image-src="img/carousel-2.jpg">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Contact Now</div>
                    <h1 class="display-6 text-white mb-5">Thanks For visiting Mystik Minds</h1>
                    <p class="text-white-50 mb-0">Please fill in your information and we shall revert quickly to resolve
                        your query or to take your feedback.</p>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100 bg-white p-5">
                        <form action="visitorinfo.php" method="post">
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="form-floating form-group">
                                        <input type="text" class="form-control bg-light border-0" name="visitor" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating form-group">
                                        <input type="email" class="form-control bg-light border-0" name="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary px-4 w-100" style="height: 60px;">
                                        Contact Now
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h1 class="fw-bold text-primary mb-4">Mystik<span class="text-white">Minds</span></h1>
                    <p>The primary mission of Mystik Minds is to enable HEIs produce "Industry-Ready" Graduates on day-1
                    </p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square me-1" href="https://www.youtube.com/@MystikMinds-India"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square me-1" href="https://www.linkedin.com/company/mystik-minds/"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-square me-1" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>MDC, Panchkula, Haryana, India 134114</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+91 97800 35430</p>
                    <p><i class="fa fa-envelope me-3"></i>info@mystikminds.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="about.php">About Us</a>
                    <a class="btn btn-link" href="service.php">Our Services</a>
                    <a class="btn btn-link" href="news.php">News @ MystikMinds</a>
                    <a class="btn btn-link" href="contact.php">Contact Us</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Newsletter</h5>
                    <p>Mystik Minds Monthly Newsletter</p>
                    <form action="visitorinfo.php" method="post">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating form-group">
                                    <input type="email" class="form-control bg-transparent border-1" name="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary px-5" style="height: 60px;">
                                    Subscribe
                                    <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">Mystik Minds</a>, All Right Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>