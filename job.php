<?php
include 'db_con.php';

if (isset($_GET['page_url']))
{

    $page_url = mysqli_real_escape_string($con, $_GET['page_url']);

    $job_query = "SELECT * FROM job_post WHERE job_title = '$page_url'";
    $job_result = mysqli_query($con, $job_query);

    if ($job_result && mysqli_num_rows($job_result) > 0)
    {
        $job = mysqli_fetch_assoc($job_result);

        ?>


        <?php
    } else
    {

        echo "<p>Job not found.</p>";
    }
} else
{

    echo "<p>No Job URL provided.</p>";
}
?>
<!DOCTYPE html>
<html lang="zxx" style="overflow-x: hidden !important;">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author">
    <meta name="description">
    <!-- ======== Page title ============ -->
    <title>AVCONEXPO | Job Details</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="../assets/img/logo/favicon.png">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="../assets/css/animate.css">
    <!--<< Splitting.css >>-->
    <link rel="stylesheet" href="../assets/css/splitting.css">
    <!--<< Magnific popup.css >>-->
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <!--<< Icomoon.css >>-->
    <link rel="stylesheet" href="../assets/css/icomoon.css">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="../assets/css/meanmenu.css">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
    <!--<< NiceSelect.css >>-->
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

    <style>
        .section-bg2 {
            background-color: #e9eff2;
        }

        .ck.ck-editor__main>.ck-editor__editable:not(.ck-focused) {
            border-color: var(--ck-color-base-border);
            height: 150px;
        }

        .ck.ck-editor__editable_inline>:last-child {
            margin-bottom: var(--ck-spacing-large);
            height: 148px;
        }

        .service-wrapper-4 .service-box-items {
            padding: 30px;
            background-color: #e9eff2;
            border-radius: 8px;

        }

        .row-flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .service-wrapper-4 .service-box-items .content .date {
            margin-top: 20px;
            color: #041b16;
            font-weight: bold;
        }


        .personal-information-wrapper .personal-skill-wrapper .progress-wrap .pro-items .progress {
            background: #fff;
            justify-content: flex-start;
            border-radius: 0;
            align-items: center;
            position: relative;
            display: flex;
            height: 15px;
            width: 100%;
        }

        P {
            text-align: justify;
        }

        .personal-information-area {
            background: #e9eff2;
            padding-top: 60px;
            margin-top: 0px;
        }

        .date {
            background: #212529;
            width: 156px;
            padding: 3px 8px;
            border-radius: 5px;
            color: white;
            font-weight: bold;
        }

        .personal-information-wrapper .personal-skill-wrapper h4 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #041b16;
            font-family: "Plus Jakarta Sans", sans-serif;
        }

        .contact-form.style1 input {
            color: #000000;
        }

        input {
            height: 48px;

        }

        label {
            color: #041b16d9;
            font-weight: bold;
        }

        .pdf {
            font-size: 15px;
            color: #b31414;
            margin-left: 10px;
        }
    </style>
</head>

<body>

    <!-- Preloader Start -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="txt-loading">
                <img src="../assets/img/logo/logo.png" alt="logo-img" />
            </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mouse Cursor Start -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!-- Back To Top Start -->
    <button id="back-top" class="back-to-top">
        <i class="fa-solid fa-chevron-up"></i>
    </button>

    <!-- Offcanvas Area Start -->
    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="https://www.avconexpo.com/">
                                <img src="../../assets/img/logo/logo.png" alt="logo-img" />
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <p class="text d-none d-xl-block">
                        We engage with customers across their value chain helping to design, build, operate, and
                        maintain the products and services that make them leaders and respected brands in their
                        industries and markets.
                    </p>
                    <div class="mobile-menu fix mb-3"></div>
                    <div class="main-button">
                        <a href="https://www.avconexpo.com/contact.php" class="theme-btn w-100 text-center">
                            Contact Us
                            <i class="fa-sharp fa-regular fa-arrow-up-right"></i>
                        </a>
                    </div>
                    <div class="offcanvas__contact">
                        <h4>Contact Info</h4>
                        <ul>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">Pocket 1, 171, Golf City, Sector D, Bagiamau, Lucknow,
                                        Uttar Pradesh 226030</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="mailto:consult@avconexpo.com"><span> consult@avconexpo.com</span></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+91-7007729873">+91-7007729873</a>,
                                    <a href="tel:+91-7860563231">+91-7860563231</a>
                                </div>
                            </li>
                        </ul>
                        <div class="header-button mt-4"></div>

                        <div class="social-icon d-flex align-items-center">
                            <a href="https://www.facebook.com/people/AVCONEXPO/" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="#"><img width="20" src="https://img.icons8.com/ios-filled/747d82/twitterx--v2.png"
                                    alt="twitterx--v2" /></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="https://www.linkedin.com/company/avconexpo/" target="_blank"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>
    <!-- Header Section Start -->
    <header class="header-section-3 header-section-4">
        <div class="header-top-section" style="background: linear-gradient(to right, #f0571f, #faa419)">
            <div class="container-fluid">
                <div class="header-top-wrapper">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/people/AVCONEXPO/" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="#"><img width="18" height="17"
                                    src="https://img.icons8.com/ios-filled/100/FFFFFF/twitterx--v2.png"
                                    alt="twitterx--v2" /></a>&nbsp;&nbsp;&nbsp;
                            <a href="https://www.linkedin.com/company/avconexpo/" target="_blank"><i
                                    class="fa-brands fa-linkedin-in mt-1"></i></a>&nbsp;&nbsp;
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </li>
                        <li class="text-white line">|</li>
                        <li>
                            <i class="fa-solid fa-envelope"></i>
                            <a href="mailto:consult@avconexpo.com">consult@avconexpo.com</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <i class="fa-solid fa-phone"></i>
                            <a href="tel:+917860563231">+91-7860563231</a>
                            <i class="fa-solid fa-phone ml-50"></i>
                            <a href="tel:+917007729873">+91-7007729873</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="header-sticky" class="header-3 header-4">
            <div class="container-fluid">
                <div class="mega-menu-wrapper">
                    <div class="header-main">
                        <a href="https://www.avconexpo.com/">
                            <img src="../assets/img/logo/logo.png" alt="logo-img" />
                        </a>
                        <div class="mean__menu-wrapper">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="active"><a href="https://www.avconexpo.com/">Home</a></li>

                                        <li>
                                            <a href="https://www.avconexpo.com/about.php">About</a>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="https://www.avconexpo.com/services.php">
                                                Services
                                                <i class="fa-regular fa-plus"></i>
                                            </a>

                                            <ul class="submenu">
                                                <li>
                                                    <a
                                                        href="https://www.avconexpo.com/business-technical-consulting.php">Business
                                                        &amp; Technical
                                                        Consultancy
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.avconexpo.com/project-management.php">Project
                                                        Management</a>
                                                </li>
                                                <li><a href="https://www.avconexpo.com/engineering-solutions.php">Engineering
                                                        solutions</a></li>
                                                <li>
                                                    <a href="https://www.avconexpo.com/trading-sourcing.php">Trading &
                                                        Sourcing</a>
                                                </li>
                                                <li><a href="https://www.avconexpo.com/talent-management.php">Talent
                                                        Management</a></li>
                                                <li>
                                                    <a href="https://www.avconexpo.com/startup-accelerator.php">Startup
                                                        Accelerator</a>
                                                </li>
                                                <li><a href="https://www.avconexpo.com/waste-management.php">Waste
                                                        Management</a></li>
                                                <li>
                                                    <a href="https://www.avconexpo.com/reviving-sick-industries.php">Reviving
                                                        Sick Industries</a>
                                                </li>
                                                <li><a href="https://www.avconexpo.com/horticulture-landscaping.php">Horticulture
                                                        &
                                                        Landscaping</a></li>
                                                <li><a href="https://www.avconexpo.com/architecture-design.php">Architecture
                                                        & Design</a></li>
                                                <li>
                                                    <a href="https://www.avconexpo.com/fmcg.php">FMCG | Beverages |
                                                        Breweries | Dairy</a>
                                                </li>
                                                <li>
                                                    <a href="https://www.avconexpo.com/quality.php">Quality Assurance &
                                                        Factory Audits</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="https://www.avconexpo.com/project.php">Projects</a>
                                        </li>
                                        <li>
                                            <a href="https://www.avconexpo.com/blogs.php">Blogs</a>
                                        </li>
                                        <li>
                                            <a href="https://www.avconexpo.com/career.php">Career</a>
                                        </li>
                                        <li>
                                            <a href="https://www.avconexpo.com/contact.php">Gallery</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="header-right d-flex justify-content-end align-items-center">
                            <div class="header-button">
                                <a href="https://www.avconexpo.com/contact.php" class="theme-btn">Get In Touch
                                    <i class="fa-sharp fa-regular fa-arrow-up-right"></i></a>
                            </div>

                            <div class="header__hamburger d-xl-block my-auto">
                                <div class="sidebar__toggle">
                                    <div class="header-bar">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Search Area Start -->
    <div class="search-wrap">
        <div class="search-inner">
            <i class="fas fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Search...">
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('../assets/img/breadcrumb.jpg');">
        <div class="container">
            <div class="page-heading">
                <div class="breadcrumb-sub-title">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">Job-Details</h1>
                </div>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="https://www.avconexpo.com/">
                            Home
                        </a>
                    </li>
                    <li>
                        <i class="fa-regular fa-slash-forward"></i> /
                    </li>
                    <li>
                        Job-Details
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Service Section -->
    <div class="personal-information-area section-padding">
        <div class="container">
            <div class="personal-information-wrapper">
                <div class="personal-skill-wrapper">

                    <div class="row g-5">
                        <div class="col-lg-6" style="padding-top: 35px;">
                            <span class="subtitle wow fw-bold"
                                style="color: rgb(241, 94, 34); visibility: visible; animation-name: fadeInUp; padding-top:50px;"><img
                                    src="../assets/img/icon/subTitleIcon.svg" alt="icon"> Job Details</span>
                            <div class="date mt-4">
                                <img src="https://img.icons8.com/external-yogi-aprelliyanto-basic-outline-yogi-aprelliyanto/20/FFFFFF/external-calender-time-and-date-yogi-aprelliyanto-basic-outline-yogi-aprelliyanto.png"
                                    alt="icon">
                                &nbsp;&nbsp;<?php echo date("j F Y", strtotime($job['added_date'])); ?>

                            </div>
                            <h2 class="wow fadeInUp mt-4" data-wow-delay=".3s">
                                <?php echo ucwords(str_replace("-", " ", $job['job_title'])); ?>

                            </h2>
                            <div class="progress-wrap">
                                <div class="pro-items">
                                    <p class="mt-3 fw-bold">
                                        <?php echo $job['short_job_description'] ?>
                                    </p>
                                </div>
                                <div class="pro-items">
                                    <h4 class="wow fadeInUp">Job Description</h4>
                                    <p class="mt-1">
                                        <?php echo $job['job_description'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-form style1 wow fadeInUp" data-wow-delay=".3s">
                                <h2>Apply For Job</h2>
                                <form class="row" method="POST" action="../admin/job_form.php" id="enquiryForm"
                                    enctype="multipart/form-data">
                                    <div class="col-md-12">
                                        <label for="">Enter Full Name</label>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Enter Your Name..." required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Enter Email</label>
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Enter Your Email..." required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Enter Phone Number</label>
                                        <input type="number" name="phone" class="form-control"
                                            placeholder="Enter Your Phone Number..." required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Job Name</label>
                                        <input type="text" name="job_title"
                                            value="<?php echo ucwords(str_replace("-", " ", $job['job_title'])); ?>"
                                            readonly>

                                    </div>
                                    <div class="col-12">
                                       <label>CV/Resume:</label><span class="text-danger fw-bold" style="font-size:12px">Only DOCX, PDF, and image files are allowed. Maximum file size: 250KB.</span>
                                        <input type="file" name="image_path" class="form-control" required
                                            accept=".jpg,.jpeg,.png,.gif,.pdf,.doc,.docx">
                                    </div>

                                    <div class="col-12 form-group mb-0 mt-4">
                                        <button class="theme-btn w-100" type="submit" name="submit">Apply Now <i
                                                class="fa-solid fa-arrow-right-long"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Footer Section    S T A R T -->
    <footer class="footer-section fix">
        <div class="footer-widgets-wrapper footer-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <a href="https://www.avconexpo.com/">
                                    <img src="../assets/img/logo/logo.png" alt="logo-img" />
                                </a>
                            </div>
                            <div class="footer-content">
                                <p>
                                    AVCONEXPO is a global Engineering and technology, Trading and Sourcing, and
                                    Architecture Solution Company
                                </p>
                                <div class="social-icon d-flex align-items-center">
                                    <a href="https://www.facebook.com/people/AVCONEXPO/" target="_blank"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a href="#"><img width="20" height="20"
                                            src="https://img.icons8.com/ios-filled/100/FFFFFF/twitterx--v2.png"
                                            alt="twitterx--v2" /></a>
                                    <a href="https://www.linkedin.com/company/avconexpo/" target="_blank"><i
                                            class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".5s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <h3>Quick Links</h3>
                            </div>
                            <ul class="list-area">
                                <li>
                                    <a href="https://www.avconexpo.com/">
                                        <i class="fa-solid fa-chevron-right"></i>
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.avconexpo.com/about.php">
                                        <i class="fa-solid fa-chevron-right"></i>
                                        About Us
                                    </a>
                                </li>

                                <li>
                                    <a href="https://www.avconexpo.com/contact.php">
                                        <i class="fa-solid fa-chevron-right"></i>
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="single-footer-widget style-margin">
                            <div class="widget-head">
                                <h3>Other Links</h3>
                            </div>
                            <ul class="list-area">
                                <li>
                                    <a href="#">
                                        <i class="fa-solid fa-chevron-right"></i>
                                        Our Services
                                    </a>
                                </li>

                                <li>
                                    <a href="https://www.avconexpo.com/project.php">
                                        <i class="fa-solid fa-chevron-right"></i>
                                        Project
                                    </a>
                                </li>

                                <li>
                                    <a href="https://www.avconexpo.com/blogs.php">
                                        <i class="fa-solid fa-chevron-right"></i>
                                        Our Blogs
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.avconexpo.com/career.php">
                                        <i class="fa-solid fa-chevron-right"></i>
                                        Career
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 ps-xl-5 wow fadeInUp" data-wow-delay=".9s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <h3>Contact Us</h3>
                            </div>
                            <div class="footer-content">
                                <ul class="contact-info">
                                    <li>
                                        <i class="fas fa-map-marker-alt"></i>
                                        Pocket 1, 171, Golf City, Sector D, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bagiamau,
                                        Lucknow, Uttar Pradesh 226030
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-phone-volume"></i>
                                        <a href="tel:+91 7007729873">+91-7007729873,</a>
                                        <a href="tel:+91 7860563231">+91-7860563231</a>
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-envelope"></i>
                                        <a href="mailto:consult@avconexpo.com"><span class="__cf_email__"
                                                data-cfemail="consult@avconexpo.com">consult@avconexpo.com</span></a>
                                    </li>
                                </ul>
                                <a href="https://www.avconexpo.com/contact.php" class="theme-btn hover-white mt-4">
                                    get A Quote
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-wrapper d-flex align-items-center justify-content-between">
                    <p class="wow fadeInLeft color-2 fw-bold" data-wow-delay=".3s">
                        © All Copyright <span id="year"></span> by <a href="https://www.avconexpo.com/">Avconexpo</a>
                        <script>
                            document.getElementById("year").innerText = new Date().getFullYear();
                        </script>
                    </p>


                    <ul class="footer-menu wow fadeInRight" data-wow-delay=".5s">
                        <li class="text-light fw-bold">
                            Designed & Developed By <a href="https//:auctech.in" class="text-warning"> Auctech MarCom
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <script src="../assets/js/jquery-3.7.1.min.js"></script>
    <!--<< Bootstrap Js >>-->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <!--<< Waypoints Js >>-->
    <script src="../assets/js/jquery.waypoints.js"></script>
    <!--<< Counterup Js >>-->
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <!--<< Viewport Js >>-->
    <script src="../assets/js/viewport.jquery.js"></script>
    <!--<< Tilt Js >>-->
    <script src="../assets/js/tilt.min.js"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="../assets/js/swiper-bundle.min.js"></script>
    <!--<< MeanMenu Js >>-->
    <script src="../assets/js/jquery.meanmenu.min.js"></script>
    <!--<< Magnific popup Js >>-->
    <script src="../assets/js/magnific-popup.min.js"></script>
    <!--<< Wow Animation Js >>-->
    <script src="../assets/js/wow.min.js"></script>
    <!--<< Splitting Animation Js >>-->
    <script src="../assets/js/splitting.js"></script>
    <!--<< NIce Select Js >>-->
    <script src="../assets/js/nice-select.min.js"></script>

    <!--<< Ajax.js >>-->
    <script src="../assets/js/ajax-mail.js"></script>
    <!--<< Main.js >>-->
    <script src="../assets/js/main.js"></script>
    <script>
        (function () {
            function c() {
                var b = a.contentDocument || a.contentWindow.document;
                if (b) {
                    var d = b.createElement('script');
                    d.innerHTML =
                        "window.__CF$cv$params={r:'91772c94c9b0185a',t:'MTc0MDQ4MTA0Mi4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='../../../cdn-cgi/challenge-platform/h/b/scripts/jsd/b0e4a89976ce/maind41d.js';document.getElementsByTagName('head')[0].appendChild(a);";
                    b.getElementsByTagName('head')[0].appendChild(d)
                }
            }
            if (document.body) {
                var a = document.createElement('iframe');
                a.height = 1;
                a.width = 1;
                a.style.position = 'absolute';
                a.style.top = 0;
                a.style.left = 0;
                a.style.border = 'none';
                a.style.visibility = 'hidden';
                document.body.appendChild(a);
                if ('loading' !== document.readyState) c();
                else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
                else {
                    var e = document.onreadystatechange || function () { };
                    document.onreadystatechange = function (b) {
                        e(b);
                        'loading' !== document.readyState && (document.onreadystatechange = e, c())
                    }
                }
            }
        })();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function () {
            $('#enquiryForm').submit(function (e) {
                e.preventDefault();
                var formData = new FormData(this);

                $.ajax({
                    url: '../admin/job_form.php',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        console.log(response);
                        if (response == 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'Thank You!',
                                text: 'Your Form has been Submitted Successfully.',
                            }).then(function () {
                                $('#enquiryForm')[0].reset();
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Invalid file type. Please upload PDF, image, or doc files only.',
                            });
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error("AJAX Error: ", status, error);
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Invalid file type. Please upload PDF, image, or doc files only.',
                        });
                    }
                });
            });
        });
    </script>
    <script>
        document.querySelector('input[name="image_path"]').addEventListener('change', function () {
            const file = this.files[0];
            if (file && file.size > 262000) { 
                alert("File size must be less than or equal to 250KB.");
                this.value = "";
            }
        });
    </script>


</body>

</html>