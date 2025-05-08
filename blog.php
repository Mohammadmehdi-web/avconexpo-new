<?php
include 'db_con.php';

if (isset($_GET['page_url'])) {
	
	$page_url = mysqli_real_escape_string($con, $_GET['page_url']);

	$blog_query = "SELECT * FROM blogs WHERE blog_url = '$page_url'";
	$blog_result = mysqli_query($con, $blog_query);

	if ($blog_result && mysqli_num_rows($blog_result) > 0) {
		$blog = mysqli_fetch_assoc($blog_result);

		$image_query = "SELECT * FROM blogs_images WHERE blog_id = '{$blog['id']}'";
		$image_result = mysqli_query($con, $image_query);
        
?>


<?php
	} else {
		
		echo "<p>Product not found.</p>";
	}
} else {
	
	echo "<p>No product URL provided.</p>";
}
?>
<!DOCTYPE html>
<html lang="zxx" style="overflow-x: hidden !important;">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $blog['blog_desc_first']  ?></title>
    <meta name="description" content="<?php echo $blog['blog_desc_second']  ?>">
    <meta name="keywords" content="<?php echo $blog['blog_point_one']  ?>">
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
    <style>
    p {
        text-align: justify;
        color: #000000bf;
        margin-bottom:10px;
    }
    strong {
        font-weight: bolder;
        color: #000000c2;
    }
    .blog-classic-wrapper .main-sidebar .single-sidebar-widgett .news-widget-categoriess ul li:not(:last-child) {
        margin-bottom: 5px;
    }

    .blog-classic-wrapper .main-sidebar .single-sidebar-widgett .news-widget-categoriess ul li {
        padding: 11px 15px;
        background-color: var(--white);
        font-size: 16px;
    }
    .line{
        margin-left: -12px;
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
                                <img src="../assets/img/logo/logo.png" alt="logo-img" />
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
                                    <a target="_blank" href="#">Pocket 1, 171, Golf City, Sector D,       Bagiamau, Lucknow, Uttar Pradesh 226030</a>
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
                            <a href="https://www.facebook.com/people/AVCONEXPO/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><img width="20" src="https://img.icons8.com/ios-filled/747d82/twitterx--v2.png"
                                    alt="twitterx--v2" /></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="https://www.linkedin.com/company/avconexpo/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
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
                             <a href="https://www.facebook.com/people/AVCONEXPO/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><img width="18" height="17" src="https://img.icons8.com/ios-filled/100/FFFFFF/twitterx--v2.png" alt="twitterx--v2"/></a>&nbsp;&nbsp;&nbsp;
                            <a href="https://www.linkedin.com/company/avconexpo/" target="_blank"><i class="fa-brands fa-linkedin-in mt-1"></i></a>&nbsp;&nbsp;
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
                                                    <a href="https://www.avconexpo.com/business-technical-consulting.php">Business &amp; Technical
                                                        Consultancy
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.avconexpo.com/project-management.php">Project Management</a>
                                                </li>
                                                <li><a href="https://www.avconexpo.com/engineering-solutions.php">Engineering solutions</a></li>
                                                <li>
                                                    <a href="https://www.avconexpo.com/trading-sourcing.php">Trading & Sourcing</a>
                                                </li>
                                                <li><a href="https://www.avconexpo.com/talent-management.php">Talent Management</a></li>
                                                <li>
                                                    <a href="https://www.avconexpo.com/startup-accelerator.php">Startup Accelerator</a>
                                                </li>
                                                <li><a href="https://www.avconexpo.com/waste-management.php">Waste Management</a></li>
                                                <li>
                                                    <a href="https://www.avconexpo.com/reviving-sick-industries.php">Reviving Sick Industries</a>
                                                </li>
                                                <li><a href="https://www.avconexpo.com/horticulture-landscaping.php">Horticulture &
                                                        Landscaping</a></li>
                                                <li><a href="https://www.avconexpo.com/architecture-design.php">Architecture & Design</a></li>
                                                <li>
                                                    <a href="https://www.avconexpo.com/fmcg.php">FMCG | Beverages | Breweries | Dairy</a>
                                                </li>
                                                <li>
                                                    <a href="https://www.avconexpo.com/quality.php">Quality Assurance & Factory Audits</a>
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
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">Blog Details</h1>
                </div>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="https://www.avconexpo.com/">
                            Home
                        </a>
                    </li>
                    <li>
                        <i class="fa-regular fa-slash-forward"></i>
                    </li>
                    <li>
                        Blog Details
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Blog Section S T A R T -->
    <div class="blog-classic-section section-padding fix">
        <div class="container">
            <div class="blog-classic-wrapper">
                <div class="row g-4">
                    <div class="col-xl-8 col-12">
                        <div class="blog-classic-post wow fadeInUp" data-wow-delay=".3s">
                            <div class="blog-image">
                                <?php
                                    $image_row = mysqli_fetch_assoc($image_result); 
                                    if ($image_row) {
                                       echo "<img src='blog_uploads/{$image_row['image']}' alt='Blog Image'/> ";
                                    } else {
                                       echo "<p>No product images available.</p>"; 
                                    }
                                ?>
                            </div>
                            <div class="blog-classic-content">
                                <ul class="meta">
                                    <li>
                                        <img src="../assets/img/icon/calendarIcon1_1.svg" alt="icon" />
                                        <?php echo date("j F Y", strtotime($blog['created_at'])); ?>
                                    </li>
                                </ul>
                                <h4><a href="#"><?php echo $blog['blog_heading'] ?></a>
                                </h4>
                                <p style="color: black !important;margin-bottom: 9px; ">
                                    <?php echo $blog['blog_desc_two'] ?>
                                </p>
                            </div>
                        </div>
                        <div class="blog-classic-post wow fadeInUp" data-wow-delay=".6s">
                            <div class="swiper blog-slider">
                                <div class="swiper-wrapper">
                                    <?php
                            
                                        mysqli_data_seek($image_result, 0); 
                                        while ($logo_row = mysqli_fetch_assoc($image_result)) {
                                        if (!empty($logo_row['logos'])) {
                                        $imageSrc = 'blog_uploads/' . htmlspecialchars($logo_row['logos']);
                                
                                    ?>
                                    <div class="swiper-slide">
                                        <div class="blog-image">
                                            <img src="<?php echo $imageSrc; ?>" alt="img">

                                        </div>
                                    </div>
                                    <?php
                                         } 
                                        }
                                    ?>
                                </div>
                                <div class="array-button">
                                    <button class="array-prev"><i class="fa-regular fa-arrow-left-long"></i></button>
                                    <button class="array-next"><i class="fa-regular fa-arrow-right-long"></i></button>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-xl-4">
                        <div class="main-sidebar">
                            <div class="single-sidebar-widgett wow fadeInUp" data-wow-delay=".6s">
                                <div class="wid-title">
                                    <h3>Services</h3>
                                </div>
                                <div class="news-widget-categoriess">
                                    <ul>
                                        <li>
                                            <a href="https://www.avconexpo.com/business-technical-consulting.php">Business &amp; Technical
                                                Consultancy
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.avconexpo.com/project-management.php">Project Management</a>
                                        </li>
                                        <li><a href="https://www.avconexpo.com/engineering-solutions.php">Engineering solutions</a></li>
                                        <li>
                                            <a href="https://www.avconexpo.com/trading-sourcing.php">Trading & Sourcing</a>
                                        </li>
                                        <li><a href="https://www.avconexpo.com/talent-management.php">Talent Management</a></li>
                                        <li>
                                            <a href="https://www.avconexpo.com/startup-accelerator.php">Startup Accelerator</a>
                                        </li>
                                        <li><a href="https://www.avconexpo.com/waste-management.php">Waste Management</a></li>
                                        <li>
                                            <a href="https://www.avconexpo.com/reviving-sick-industries.php">Reviving Sick Industries</a>
                                        </li>
                                        <li><a href="https://www.avconexpo.com/horticulture-landscaping.php">Horticulture & Landscaping</a></li>
                                        <li><a href="https://www.avconexpo.com/architecture-design.php">Architecture & Design</a></li>
                                        <li>
                                            <a href="https://www.avconexpo.com/fmcg.php">FMCG | Beverages | Breweries | Dairy</a>
                                        </li>
                                        <li>
                                            <a href="https://www.avconexpo.com/quality.php">Quality Assurance & Factory Audits</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-sidebar-widget wow fadeInUp" data-wow-delay=".7s">
                                <div class="wid-title">
                                    <h3>Recent Blogs</h3>
                                </div>
                                <div class="recent-post-area">
                                    <?php
                                            include('db_con.php');                                   
                                            $sql = "SELECT blogs.blog_heading AS heading, 
                                            blogs_images.image, 
                                            blogs.blog_url,
                                            blogs.created_at
                                            FROM blogs
                                            INNER JOIN blogs_images ON blogs.id = blogs_images.blog_id
                                            GROUP BY blogs.id  
                                            ORDER BY blogs.created_at DESC LIMIT 4"; 

                                            $result = $con->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                            $heading = $row['heading'];
                                            $image = $row['image'];
                                            $blog_url = $row['blog_url'];
                                            $created_at = $row['created_at'];
                                            $formatted_date = date("j F Y", strtotime($created_at));
                                    ?>
                                    <div class="recent-items">
                                        <div class="recent-thumb">
                                            <img src="blog_uploads/<?php echo $image; ?>" alt="img">
                                        </div>
                                        <div class="recent-content">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-calendar-days"></i>
                                                    <?php echo date("j F Y", strtotime($blog['created_at'])); ?>
                                                </li>
                                            </ul>
                                            <h6>
                                                <a href="<?php echo $blog_url; ?>">
                                                    <?php echo $heading; ?>
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                    <?php 
                                        }
                                    } else {
                                        
                                        echo "<p>No blog found for today</p>";
                                    }
                                    ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                                    <a  href="https://www.facebook.com/people/AVCONEXPO/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><img width="20" height="20" src="https://img.icons8.com/ios-filled/100/FFFFFF/twitterx--v2.png" alt="twitterx--v2"/></a>
                                    <a href="https://www.linkedin.com/company/avconexpo/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
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
                               <!-- <li>
                                    <a href="https://www.avconexpo.com/gallery.php">
                                        <i class="fa-solid fa-chevron-right"></i>
                                        Gallery
                                    </a>
                                </li>-->
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
                                        Pocket 1, 171, Golf City, Sector D, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bagiamau, Lucknow, Uttar Pradesh 226030
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-phone-volume"></i>
                                        <a href="tel:+91 7007729873">+91-7007729873,</a>
                                        <a href="tel:+91 7860563231">+91-7860563231</a>
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-envelope"></i>
                                        <a
                                            href="mailto:consult@avconexpo.com"><span
                                                class="__cf_email__"
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
                           Designed & Developed By <a href="https//:auctech.in" class="text-warning"> Auctech MarCom </a>
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

    <!--<< Main.js >>-->
    <script src="../assets/js/main.js"></script>
    <script>
    (function() {
        function c() {
            var b = a.contentDocument || a.contentWindow.document;
            if (b) {
                var d = b.createElement('script');
                d.innerHTML =
                    "window.__CF$cv$params={r:'91772cbd7a7d185a',t:'MTc0MDQ4MTA0OS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='../../../cdn-cgi/challenge-platform/h/b/scripts/jsd/b0e4a89976ce/maind41d.js';document.getElementsByTagName('head')[0].appendChild(a);";
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
                var e = document.onreadystatechange || function() {};
                document.onreadystatechange = function(b) {
                    e(b);
                    'loading' !== document.readyState && (document.onreadystatechange = e, c())
                }
            }
        }
    })();
    </script>
</body>

</html>