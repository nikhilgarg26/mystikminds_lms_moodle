<?php
session_start();
$course_id = 1;
$purchased = false;
if (in_array($course_id, $_SESSION['courses_enrolled'])) {
    $purchased = true;
}
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
    <title>Mystik Minds - No-Code AI</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
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

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">No-Code AI for Mechanical Engineers</h1>
            <div class="m-auto">
                <h5 class="text-white animated slideInDown mb-4">Learn AI implementation in Mechanical Engineering
                    domain using No-Code <br> AI Platform without writing even a single line of code.</h5>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <div class="container row mx-auto align-items-center">
        <div class="col-12 col-lg-8">
            <img class="img-fluid" src="img/mission.jpg" alt="">
        </div>
        <div class="col-12 col-lg-4 mt-5 mt-lg-0">
            <div class="card mx-auto w-100" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title mb-4">₹449</h5>
                    <p class="card-text mb-3">This course is carefully crafted for a broad audience in mechanical
                        engineering, including professionals, enthusiasts, and stakeholders looking to harness the power
                        of artificial intelligence without the need for intricate coding. </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <h6>This course contains</h6>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><small>4 hours on-demand video</small></li>
                            <li class="list-group-item"><small>Access on mobile and TV</small></li>
                            <li class="list-group-item"><small>Full lifetime access</small></li>
                            <li class="list-group-item"><small>Certificate of completion</small></li>
                        </ul>
                    </li>

                    <li class="list-group-item">
                        <div class="d-flex mt-2">
                            <div class="content text-center">
                                <div class="ratings">
                                    <span class="product-rating">4.6</span>
                                    <div class="stars d-inline-block">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="rating-text d-inline-block">
                                        <span>( 538 students )</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item"><small class="text-start w-100 mt-1">Created by: Dr Manoj Manuja</small>
                    </li>
                </ul>
                <div class="card-body">
                    <?php 
                    if($purchased){
                        echo '<a class="btn btn-outline-primary py-2 px-3 mt-2 mt-sm-0 mb-3" href="">
                        Go to Moodle
                    </a>';
                    }else{
                        echo '<a class="btn btn-outline-primary py-2 px-3 mt-2 mt-sm-0 mb-3" href="checkout.php?courseid=' . $course_id . '">
                        Purchase Now
                    </a>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>


    <div class="container bg-secondary my-5 rounded">
        <div class="container text-center p-4">
            <h3 class="section-title my-4">What Will You Learn</h3>
            <div class="align mb-4 custom-width col col-xl-9 mx-auto">
                <ul class="d-flex flex-wrap justify-content-between list-unstyled mx-auto d-inline-block">
                    <li class="mb-2"><i class="theme-check-icon fas fa-check me-2 text-primary text-start"></i>Foster awareness among participants regarding the omnipresence of AI in their surroundings.</li>
                    <li class="mb-2"><i class="theme-check-icon fas fa-check me-2 text-primary"></i>Enhance understanding of diverse AI applications in Mechanical Engineering domain.</li>
                    <li class="mb-2"><i class="theme-check-icon fas fa-check me-2 text-primary"></i>Provide knowledge on AI fundamentals, its classifications, and key components.</li>
                    <li class="mb-2"><i class="theme-check-icon fas fa-check me-2 text-primary"></i>Apply No-Code AI platforms to integrate AI end-to-end into Mechanical Engineering domain use case.</li>
                    <li class="mb-2"><i class="theme-check-icon fas fa-check me-2 text-primary"></i>Apply No-Code AI platforms to integrate AI end-to-end into Mechanical Engineering domain use case.</li>
                    <li class="mb-2"><i class="theme-check-icon fas fa-check me-2 text-primary"></i>Discuss upcoming futuristic job opportunities in the Mechanical Engineering sector driven by AI.</li>
                </ul>
            </div><!--//text-center-->
            <div class="text-center">
                <a class="btn btn-outline-primary py-2 px-3 mt-2 mt-sm-0 mb-3" href="https://www.udemy.com/course/no-code-ai-for-mechanical-engineers">
                    Start Learning
                </a>
                <!-- <a class="btn btn-primary scrollto" href="#section-pricing">Join Course Now</a> -->
            </div>
            <!--//video-container-->

        </div><!--//section-col-max-->
    </div><!--//container-->

    <div class="container bg-secondary my-5 rounded">
        <div class="container text-center p-3">
            <h3 class="section-title my-5">What's Included </h3>

            <div class="data-summary justify-content-center text-center">
                <div class="row mb-5 text-primary font-weight-bold w-75 mx-auto">
                    <div class="item col-6 col-lg-3 mb-3 mb-lg-0">
                        <h1 class="text-primary">8+</h1>
                        <p class="meta">Modules</p>
                    </div><!--//item-->
                    <div class="item col-6 col-lg-3 mb-3 mb-lg-0">
                        <h1 class="text-primary">12+</h1>
                        <div class="meta">Videos</div>
                    </div><!--//item-->
                    <div class="item col-6 col-lg-3 mb-3 mb-lg-0">
                        <h1 class="text-primary">8+</h1>
                        <div class="meta">Resources</div>
                    </div><!--//item-->
                    <div class="item col-6 col-lg-3 mb-3 mb-lg-0">
                        <h1 class="text-primary">4</h1>
                        <div class="meta">Hours</div>
                    </div><!--//item-->
                </div><!--//row-->
            </div><!--//course-summary-->
        </div><!--//section-col-max-->
    </div><!--//container-->



    <div class="container ">
        <div class="container text-center p-3 mb-5">
            <h3 class="section-title mb-5">Course Modules</h3>

            <div class="accordion module-accordion col-12 col-md-9 mx-auto" id="module-accordion">
                <div class="module-item card">
                    <div class="module-header card-header" id="module-heading-1">
                        <h5 class="module-title mb-0 px-0 px-md-3 text-start">
                            <a class="card-toggle module-toggle" href="#module-1" data-bs-toggle="collapse" data-bs-target="#module-1" aria-expanded="true" aria-controls="module-1">
                                <i class="module-toggle-icon fas fa-plus me-2"></i>
                                Module 1 - Introduction
                            </a>
                        </h5>
                    </div><!--//card-header-->

                    <div id="module-1" class="module-content collapse bg-secondary" aria-labelledby="module-heading-1">
                        <div class="">
                            <div class="module-sub-item p-3">
                                <div class="row justify-content-between">
                                    <div class="col-12 col-sm-9 d-flex justify-content-between text-start">
                                        <p class="mb-0">1.1 Introduction</p>
                                    </div>
                                    <div class="col-3 text-end extra-info d-none d-sm-inline">02:30</div>
                                </div>
                            </div><!--//module-sub-item-->
                            <div class="module-sub-item p-3">
                                <div class="row justify-content-between">
                                    <div class="col-12 col-sm-9 d-flex justify-content-between text-start">
                                        <p class="mb-0">1.2 Course Objectives and Expected Outcomes</p>
                                    </div>
                                    <div class="col-3 text-end extra-info d-none d-sm-inline">15:20</div>
                                </div>
                            </div><!--//module-sub-item-->
                        </div><!--//card-body-->
                    </div><!--//module-content-->
                </div><!--//module-item-->

                <div class="module-item card">
                    <div class="module-header card-header" id="module-heading-2">
                        <h5 class="module-title mb-0 px-0 px-md-3 text-start">
                            <a class="card-toggle module-toggle" href="#module-2" data-bs-toggle="collapse" data-bs-target="#module-2" aria-expanded="true" aria-controls="module-2">
                                <i class="module-toggle-icon fas fa-plus me-2"></i>
                                Module 2 - AI Around Us
                            </a>
                        </h5>
                    </div><!--//card-header-->

                    <div id="module-2" class="module-content collapse bg-secondary" aria-labelledby="module-heading-2">
                        <div class="card-body p-0">
                            <div class="module-sub-item p-3">
                                <div class="row justify-content-between">
                                    <div class="col-12 col-sm-9 d-flex justify-content-between text-start">
                                        <p class="mb-0">2.1 AI Around Us</p>
                                    </div>
                                    <div class="col-3 text-end extra-info d-none d-sm-inline">02:30</div>
                                </div>
                            </div><!--//module-sub-item-->
                            <div class="module-sub-item p-3">
                                <div class="row justify-content-between">
                                    <div class="col-12 col-sm-9 d-flex justify-content-between text-start">
                                        <p class="mb-0">2.2 Quiz on AI Around Us</p>
                                    </div>
                                    <div class="col-3 text-end extra-info d-none d-sm-inline">15:20</div>
                                </div>
                            </div><!--//module-sub-item-->
                        </div><!--//card-body-->
                    </div><!--//module-content-->
                </div><!--//module-item-->

                <div class="module-item card">
                    <div class="module-header card-header" id="module-heading-3">
                        <h5 class="module-title mb-0 px-0 px-md-3 text-start">
                            <a class="card-toggle module-toggle" href="#module-3" data-bs-toggle="collapse" data-bs-target="#module-3" aria-expanded="true" aria-controls="module-3">
                                <i class="module-toggle-icon fas fa-plus me-2"></i>
                                Module 3 - Applications of AI in Mechanical Engineering
                            </a>
                        </h5>
                    </div><!--//card-header-->

                    <div id="module-3" class="module-content collapse bg-secondary" aria-labelledby="module-heading-3">
                        <div class="card-body p-0">
                            <div class="module-sub-item p-3">
                                <div class="row justify-content-between">
                                    <div class="col-12 col-sm-9 d-flex justify-content-between text-start">
                                        <p class="mb-0">3.1 Applications of AI in Mechanical Engineering</p>
                                    </div>
                                    <div class="col-3 text-end extra-info d-none d-sm-inline">02:30</div>
                                </div>
                            </div><!--//module-sub-item-->
                            <div class="module-sub-item p-3">
                                <div class="row justify-content-between">
                                    <div class="col-12 col-sm-9 d-flex justify-content-between text-start">
                                        <p class="mb-0">3.2 Quiz on Applications of AI in Mechanical Engineering</p>
                                    </div>
                                    <div class="col-3 text-end extra-info d-none d-sm-inline">15:20</div>
                                </div>
                            </div><!--//module-sub-item-->
                        </div><!--//card-body-->
                    </div><!--//module-content-->
                </div><!--//module-item-->

                <div class="module-item card">
                    <div class="module-header card-header" id="module-heading-4">
                        <h5 class="module-title mb-0 px-0 px-md-3 text-start">
                            <a class="card-toggle module-toggle" href="#module-4" data-bs-toggle="collapse" data-bs-target="#module-4" aria-expanded="true" aria-controls="module-4">
                                <i class="module-toggle-icon fas fa-plus me-2"></i>
                                Module 4 - What is AI ?
                            </a>
                        </h5>
                    </div><!--//card-header-->

                    <div id="module-4" class="module-content collapse bg-secondary" aria-labelledby="module-heading-4">
                        <div class="card-body p-0">
                            <div class="module-sub-item p-3">
                                <div class="row justify-content-between">
                                    <div class="col-12 col-sm-9 d-flex justify-content-between text-start">
                                        <p class="mb-0">
                                            4.1 What is AI ?
                                        </p>
                                    </div>
                                    <div class="col-3 text-end extra-info d-none d-sm-inline">02:30</div>
                                </div>
                            </div><!--//module-sub-item-->
                            <div class="module-sub-item p-3">
                                <div class="row justify-content-between">
                                    <div class="col-12 col-sm-9 d-flex justify-content-between text-start">
                                        <p class="mb-0">4.2 Quiz What is AI ?</p>
                                    </div>
                                    <div class="col-3 text-end extra-info d-none d-sm-inline">15:20</div>
                                </div>
                            </div><!--//module-sub-item-->
                            <div class="module-sub-item p-3">
                                <div class="row justify-content-between">
                                    <div class="col-12 col-sm-9 d-flex justify-content-between text-start">
                                        <p class="mb-0">4.3 Types of AI</p>
                                    </div>
                                    <div class="col-3 text-end extra-info d-none d-sm-inline">23:15</div>
                                </div>
                            </div><!--//module-sub-item-->
                            <div class="module-sub-item p-3">
                                <div class="row justify-content-between">
                                    <div class="col-12 col-sm-9 d-flex justify-content-between text-start">
                                        <p class="mb-0">4.4 Quiz on Types of AI</p>
                                    </div>
                                    <div class="col-3 text-end extra-info d-none d-sm-inline">23:15</div>
                                </div>
                            </div><!--//module-sub-item-->
                            <div class="module-sub-item p-3">
                                <div class="row justify-content-between">
                                    <div class="col-12 col-sm-9 d-flex justify-content-between text-start">
                                        <p class="mb-0">4.5 AI vs ML vs DL vs DS</p>
                                    </div>
                                    <div class="col-3 text-end extra-info d-none d-sm-inline">23:15</div>
                                </div>
                            </div><!--//module-sub-item-->
                            <div class="module-sub-item p-3">
                                <div class="row justify-content-between">
                                    <div class="col-12 col-sm-9 d-flex justify-content-between text-start">
                                        <p class="mb-0">4.6 Quiz on AI vs ML vs DL vs DS</p>
                                    </div>
                                    <div class="col-3 text-end extra-info d-none d-sm-inline">23:15</div>
                                </div>
                            </div><!--//module-sub-item-->
                            <div class="module-sub-item p-3">
                                <div class="row justify-content-between">
                                    <div class="col-12 col-sm-9 d-flex justify-content-between text-start">
                                        <p class="mb-0">4.7 Is Human Intelligence at Stake ?</p>
                                    </div>
                                    <div class="col-3 text-end extra-info d-none d-sm-inline">23:15</div>
                                </div>
                            </div><!--//module-sub-item-->
                            <div class="module-sub-item p-3">
                                <div class="row justify-content-between">
                                    <div class="col-12 col-sm-9 d-flex justify-content-between text-start">
                                        <p class="mb-0">4.8 Quiz on Is Human Intelligence at Stake ?</p>
                                    </div>
                                    <div class="col-3 text-end extra-info d-none d-sm-inline">23:15</div>
                                </div>
                            </div><!--//module-sub-item-->


                        </div><!--//card-body-->
                    </div><!--//module-content-->
                </div><!--//module-item-->

                <div class="module-item card">
                    <div class="module-header card-header" id="module-heading-5">
                        <h5 class="module-title mb-0 px-0 px-md-3 text-start">
                            <a class="card-toggle module-toggle" href="#module-5" data-bs-toggle="collapse" data-bs-target="#module-5" aria-expanded="true" aria-controls="module-5">
                                <i class="module-toggle-icon fas fa-plus me-2"></i>
                                Module 5 - Introduction to No-Code AI
                            </a>
                        </h5>
                    </div><!--//card-header-->

                    <div id="module-5" class="module-content collapse bg-secondary" aria-labelledby="module-heading-5">
                        <div class="card-body p-0">
                            <div class="module-sub-item p-3">
                                <div class="row justify-content-between">
                                    <div class="col-12 col-sm-9 d-flex justify-content-between text-start">
                                        <p class="mb-0">5.1 Introduction to No-Code AI</p>
                                    </div>
                                    <div class="col-3 text-end extra-info d-none d-sm-inline">02:30</div>
                                </div>
                            </div><!--//module-sub-item-->
                        </div><!--//card-body-->
                    </div><!--//module-content-->
                </div><!--//module-item-->

                <div class="module-item card">
                    <div class="module-header card-header" id="module-heading-6">
                        <h5 class="module-title mb-0 px-0 px-md-3 text-start">
                            <a class="card-toggle module-toggle" href="#module-6" data-bs-toggle="collapse" data-bs-target="#module-6" aria-expanded="true" aria-controls="module-6">
                                <i class="module-toggle-icon fas fa-plus me-2"></i>
                                Module 6 - Mechanical Engineering use case implementation using No-Code AI Platform
                            </a>
                        </h5>
                    </div><!--//card-header-->

                    <div id="module-6" class="module-content collapse bg-secondary" aria-labelledby="module-heading-6">
                        <div class="card-body p-0">
                            <div class="module-sub-item p-3">
                                <div class="row justify-content-between">
                                    <div class="col-12 col-sm-9 d-flex justify-content-between text-start">
                                        <p class="mb-0">6.1 Mechanical Engineering use case implementation using No-Code AI Platform</p>
                                    </div>
                                    <div class="col-3 text-end extra-info d-none d-sm-inline">02:30</div>
                                </div>
                            </div><!--//module-sub-item-->
                            <div class="module-sub-item p-3">
                                <div class="row justify-content-between">
                                    <div class="col-12 col-sm-9 d-flex justify-content-between text-start">
                                        <p class="mb-0">6.2 Quiz on Project Implementation</p>
                                    </div>
                                    <div class="col-3 text-end extra-info d-none d-sm-inline">02:30</div>
                                </div>
                            </div><!--//module-sub-item-->
                        </div><!--//card-body-->
                    </div><!--//module-content-->
                </div><!--//module-item-->

                <div class="module-item card">
                    <div class="module-header card-header" id="module-heading-7">
                        <h5 class="module-title mb-0 px-0 px-md-3 text-start">
                            <a class="card-toggle module-toggle" href="#module-7" data-bs-toggle="collapse" data-bs-target="#module-7" aria-expanded="true" aria-controls="module-7">
                                <i class="module-toggle-icon fas fa-plus me-2"></i>
                                Module 7 - Future Jobs in Mechanical Engineering
                            </a>
                        </h5>
                    </div><!--//card-header-->

                    <div id="module-7" class="module-content collapse bg-secondary" aria-labelledby="module-heading-7">
                        <div class="card-body p-0">
                            <div class="module-sub-item p-3">
                                <div class="row justify-content-between">
                                    <div class="col-12 col-sm-9 d-flex justify-content-between text-start">
                                        <p class="mb-0">7.1 Future Jobs in Mechanical Engineering</p>
                                    </div>
                                    <div class="col-3 text-end extra-info d-none d-sm-inline">02:30</div>
                                </div>
                            </div><!--//module-sub-item-->
                            <div class="module-sub-item p-3">
                                <div class="row justify-content-between">
                                    <div class="col-12 col-sm-9 d-flex justify-content-between text-start">
                                        <p class="mb-0">7.2 Quiz on Future Jobs in Mechanical Engineering</p>
                                    </div>
                                    <div class="col-3 text-end extra-info d-none d-sm-inline">02:30</div>
                                </div>
                            </div><!--//module-sub-item-->
                        </div><!--//card-body-->
                    </div><!--//module-content-->
                </div><!--//module-item-->

                <div class="module-item card">
                    <div class="module-header card-header" id="module-heading-8">
                        <h5 class="module-title mb-0 px-0 px-md-3 text-start">
                            <a class="card-toggle module-toggle" href="#module-8" data-bs-toggle="collapse" data-bs-target="#module-8" aria-expanded="true" aria-controls="module-8">
                                <i class="module-toggle-icon fas fa-plus me-2"></i>
                                Module 8 - What's Next ?
                            </a>
                        </h5>
                    </div><!--//card-header-->

                    <div id="module-8" class="module-content collapse bg-secondary" aria-labelledby="module-heading-8">
                        <div class="card-body p-0">
                            <div class="module-sub-item p-3">
                                <div class="row justify-content-between">
                                    <div class="col-12 col-sm-9 d-flex justify-content-between text-start">
                                        <p class="mb-0">8.1 What's Next ? </p>
                                    </div>
                                    <div class="col-3 text-end extra-info d-none d-sm-inline">02:30</div>
                                </div>
                            </div><!--//module-sub-item-->
                        </div><!--//card-body-->
                    </div><!--//module-content-->
                </div><!--//module-item-->

            </div><!--//module-accordion-->
        </div><!--//section-col-max-->
    </div><!--//container-->


    <div id="section-tutor" class="section-tutor section my-5">
        <div class="container bg-secondary my-5 rounded">
            <div class="container-inner p-5 position-relative theme-bg-primary rounded">
                <div class="row over-section-bg">
                    <div class="col-12 col-lg-3 my-auto">
                        <div class="tutor-img-holder mb-5 mb-lg-0 text-center">
                            <img class="tutor-profile img-fluid rounded" src="img/instructor.jpg" alt="">
                        </div><!--//tutor-img-holder-->
                    </div><!--//col-->
                    <div class="col-12 col-lg-9">
                        <div class="pl-lg-4">
                            <h3 class="section-title mb-4 text-primary text-lg-start">Meet The Creator</h3>
                            <div data-purpose="description-content">
                                <p><strong>Dr Manoj Manuja</strong> is an experienced Industry Expert with 30+ years of hands-on expertise in bridging the gap between “<strong>Industry &amp;
                                        Academia</strong>” along with deep competencies in preparing “<strong>Day-1
                                        Industry Ready Professionals</strong>”.</p>
                                <p>He is a <strong>PhD</strong> in Computer Science and Engineering from <strong>Thapar
                                        University</strong>, India and <strong>M Tech</strong> in Signal Processing from
                                    <strong>Netaji Subhas Institute of Technology</strong> (NSIT), University of Delhi,
                                    India.
                                </p>
                                <p>He has worked extensively on <strong>Industry 4.0</strong> technologies for building
                                    IT applications for Fortune-500 customers, especially in <strong>digital
                                        transformations</strong>, at Global companies like <strong>General Electric
                                        (GE)</strong> and <strong>Infosys</strong>.</p>
                                <p>He is currently the <strong>Founder &amp; CEO</strong> of <strong>Mystik Minds Pvt
                                        Ltd</strong>, a company that helps students <strong>meet their career
                                        aspirations</strong>. In his current role, he enables students outside the
                                    computer science discipline, specifically those studying <strong>agriculture,
                                        pharmacy, and business management</strong>, in enhancing their proficiency in
                                    <strong>artificial intelligence (AI)</strong>. Within this assignment, students
                                    develop AI solutions tailored to their respective domains, utilizing a
                                    <strong>No-Code AI Platform</strong> that eliminates the necessity for coding,
                                    allowing them to engage in AI development <strong>without writing a single line of
                                        code.</strong>
                                </p>
                            </div>
                            <div class="text-center text-lg-start">
                                <ul class="social-list list-unstyled mt-4 mb-0 mx-auto mx-lg-0">
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-github fa-fw"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-globe fa-fw"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-blog fa-fw"></i></a></li>
                                </ul><!--//social-list-->
                            </div>
                        </div>
                    </div><!--//col-->
                </div><!--//row-->
            </div><!--//container-inner-->
        </div><!--//container-->
    </div><!--//section-tutor-->


    <!-- Service Start -->


    <!-- Service Start -->

    <!-- Service End -->


    <!-- Footer Start -->
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