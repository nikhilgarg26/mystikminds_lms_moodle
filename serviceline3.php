<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CYRSVT9E0J"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-CYRSVT9E0J');
    </script>
    <meta charset="utf-8">
    <title>Mystik Minds - Technology Evangelisation</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap"
        rel="stylesheet">

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
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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
            <h1 class="display-4 text-white animated slideInDown mb-4">Technology Evangelisation for Students and
                Faculty</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="service.php">Services</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Service Line - 3</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5 bg-secondary">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">What We Do</div>
                <h1 class="display-6 mb-5">Niche Technology Evangelization for Students, Faculty & University</h1>
            </div>
        </div>
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5 border border-primary">
                        <img class="img-fluid mb-4" src="img/icon-1.png" alt="">
                        <h2 class="mb-3">Industry Focused Learning for Students</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5 border border-primary">
                        <p class="mb-4"><b>Semester long Technology Enablement Programs:</b><br>
                            We offer technology enablement programs spread over 1-2 semesters on niche technologies
                            required to make your career jump-started.
                            <b>Technology Evangelization Workshops:</b><br>
                            We offer workshops on the latest trends and tools in the tech industry, including topics
                            such as Artificial Intelligence, Machine Learning, Blockchain, and Cybersecurity. <br>
                            <b>Certification Programs:</b><br>
                            We offer certification programs that allow you to demonstrate your proficiency in the latest
                            technologies. These certifications are highly valued in the tech industry and can help you
                            stand out in a competitive job market.<br><br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5 border border-primary">
                        <img class="img-fluid mb-4" src="img/icon-1.png" alt="">
                        <h2 class="mb-3">Industry Aligned Faculty Development</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5 border border-primary">
                        <p class="mb-4">We understand the important role that you play in preparing the next generation
                            of tech professionals. We are committed to supporting you in this mission by providing you
                            with the resources and training you need to deliver the best possible education to your
                            students.
                            Our offerings for faculty members include:<br>
                            <b>Technology Evangelization Workshops:</b><br>
                            We offer workshops on the latest trends and tools in the tech industry, including topics
                            such as Artificial Intelligence, Machine Learning, Blockchain, and Cybersecurity. <br>
                            <b>Faculty Development Programs:</b><br>
                            We offer faculty development programs to help you develop the skills you need to deliver the
                            best possible education to your students. <br><br>

                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5 border border-primary">
                        <img class="img-fluid mb-4" src="img/icon-1.png" alt="">
                        <h2 class="mb-3">Future Ready University Ecosystem</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5 border border-primary">
                        <p class="mb-4">Mystik Minds provides a unique mentorship to the university leadership team so
                            as to align the academic ecosystem in line with industry requirements. This mentorship helps
                            the university to guage their overall readiness to meet the demands of the industry and
                            re-align accordingly. Mystik Minds helps the leaders to work on the existing gaps in
                            university's infrastructure, curriculum, faculty, research capabilities, and industry
                            collaborations and work on building a "Future Ready" university.<br><br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                        <a class="btn btn-square me-1" href="https://www.youtube.com/@MystikMinds-India"><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square me-1" href="https://www.linkedin.com/company/mystik-minds/"><i
                                class="fab fa-linkedin-in"></i></a>
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
                                    <input type="email" class="form-control bg-transparent border-1" name="email"
                                        placeholder="Your Email">
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