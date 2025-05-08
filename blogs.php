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
    <title>AVCONEXPO | Blogs</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="assets/img/logo/favicon.png">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--<< Splitting.css >>-->
    <link rel="stylesheet" href="assets/css/splitting.css">
    <!--<< Magnific popup.css >>-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--<< Icomoon.css >>-->
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!--<< NiceSelect.css >>-->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="assets/css/main.css">
    <style>
    .blog-card.style1 .thumb img {
    width: 100%;
    height: 200px;
    
}
.blog-card.style1 .blog-content .content h4 a {
    font-size: 19px;
}
    </style>
</head>

<body>

    <!-- Header Section Start -->
    <?php
        include('header.php');
   ?>

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
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/breadcrumb.jpg');">
        <div class="container">
            <div class="page-heading">
                <div class="breadcrumb-sub-title">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">Blogs</h1>
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
                        Blogs
                    </li>
                </ul>
            </div>
        </div>
    </div>

      <!-- Blog Section START -->
<div class="blog-section">
    <div class="blog-container-wrapper style2 section-padding fix">
        <div class="container">
            <div class="blog-wrapper style2">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-xl-12">
                        <div class="section-title text-center">
                            <span class="subtitle wow fadeInUp">
                                <img src="assets/img/icon/subTitleIcon.svg" alt="icon" />Our Blog
                            </span>
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">Our Latest Blog</h2>
                        </div>
                    </div>
                </div>

                <?php
                include('db_con.php');                                   
                $sql = "SELECT blogs.blog_heading AS heading, 
                               blogs_images.image, 
                               blogs.blog_url,
                               blogs.created_at
                        FROM blogs
                        INNER JOIN blogs_images ON blogs.id = blogs_images.blog_id
                        GROUP BY blogs.id  
                        ORDER BY blogs.created_at DESC 
                        LIMIT 6"; 
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                    echo '<div class="row g-4">';

                    while ($row = $result->fetch_assoc()) {
                        $heading = htmlspecialchars($row['heading']);
                        $image = htmlspecialchars($row['image']);
                        $blog_url = htmlspecialchars($row['blog_url']);
                        $created_at = date("M d, Y", strtotime($row['created_at']));
                ?>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6"> 
                            <div class="blog-card style1 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="thumb img-shine">
                                    <a href="blog/<?= $blog_url; ?>">
                                        <img src="blog/blog_uploads/<?= $image; ?>" alt="thumb">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="date">
                                        <img src="assets/img/icon/dateIcon1_1.svg" alt="icon">
                                        <span><?= $created_at; ?></span>
                                    </div>
                                    <div class="content">
                                        <h4><a href="blog/<?= $blog_url; ?>"><?= $heading; ?></a></h4>
                                        <div class="link-meta">
                                            <a href="blog/<?= $blog_url; ?>">Read more <i class="fa-regular fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php 
                    }
                    echo '</div>';
                } else {
                    echo "<p class='text-black mt-2 text-center blog-not-found mt-4'>No blog found for today</p>";
                }
                ?>
            </div>
        </div>
    </div>
</div>
<!-- Blog Section END -->


    <!-- Footer Section    S T A R T -->
    <?php
        include('footer.php');
   ?>

    <!--<< All JS Plugins >>-->
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <!--<< Bootstrap Js >>-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--<< Waypoints Js >>-->
    <script src="assets/js/jquery.waypoints.js"></script>
    <!--<< Counterup Js >>-->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!--<< Viewport Js >>-->
    <script src="assets/js/viewport.jquery.js"></script>
    <!--<< Tilt Js >>-->
    <script src="assets/js/tilt.min.js"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!--<< MeanMenu Js >>-->
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <!--<< Magnific popup Js >>-->
    <script src="assets/js/magnific-popup.min.js"></script>
    <!--<< Wow Animation Js >>-->
    <script src="assets/js/wow.min.js"></script>
    <!--<< Splitting Animation Js >>-->
    <script src="assets/js/splitting.js"></script>
    <!--<< NIce Select Js >>-->
    <script src="assets/js/nice-select.min.js"></script>


    <!--<< Main.js >>-->
    <script src="assets/js/main.js"></script>
    <script>
    (function() {
        function c() {
            var b = a.contentDocument || a.contentWindow.document;
            if (b) {
                var d = b.createElement('script');
                d.innerHTML =
                    "window.__CF$cv$params={r:'91772caad9bee16a',t:'MTc0MDQ4MTA0Ni4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='../../../cdn-cgi/challenge-platform/h/b/scripts/jsd/b0e4a89976ce/maind41d.js';document.getElementsByTagName('head')[0].appendChild(a);";
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