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
    <title>AVCONEXPO | Career</title>
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


        .service-wrapper-4 .service-box-items .content .link {
            margin-top: 20px;
            border: 1px solid;
            padding: 6px 14px;
            background: #f15e22;
            color: white !important;
            border-radius: 30px;
        }

        .service-wrapper-4 .service-box-items .content .link a:hover {
            color: white;
        }

        .service-wrapper-4 .service-box-items .content .link a {
            color: #fff;

        }

        p {

            text-align: justify;
        }

        .view-more-btn {
            border: none;
            background: none;
            color: blue;
            cursor: pointer;
            font-size: 14px;
        }

        #shortDesc_<?= $job_title ?>,
        #fullDesc_<?= $job_title ?> {
            transition: max-height 0.3s ease-in-out;
        }

        #fullDesc_<?= $job_title ?> {
            max-height: 200px;
            overflow: hidden;
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
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">Career</h1>
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
                        Career
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Service Section -->
    <section class="service-section fix section-padding" id="service">
        <div class="container custom-container-2">
            <div class="service-wrapper-4">
                <div class="row g-5">

                    <div class="col-lg-12">
                        <div class="row g-4">
                            <?php
                            include('db_con.php');
                            $sql = "SELECT job_post.job_title AS job_title, 
                              short_job_description,
                              job_description,
                               job_post.added_date
                                FROM job_post
                              
                                GROUP BY job_post.id  
                                ORDER BY job_post.added_date DESC 
                                LIMIT 6";
                            $result = $con->query($sql);

                            if ($result->num_rows > 0)
                            {
                                echo '<div class="row g-4">';

                                while ($row = $result->fetch_assoc())
                                {
                                    $job_title = $row['job_title'];
                                    $short_job_description = $row['short_job_description'];
                                    $job_description = $row['job_description'];
                                    $added_date = date("M d, Y", strtotime($row['added_date']));
                                    ?>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="service-box-items wow fadeInUp" data-wow-delay=".3s">
                                            <div class="date">
                                                <img src="https://img.icons8.com/external-yogi-aprelliyanto-basic-outline-yogi-aprelliyanto/30/external-calender-time-and-date-yogi-aprelliyanto-basic-outline-yogi-aprelliyanto.png"
                                                    alt="icon">
                                                &nbsp;&nbsp;<?= $added_date; ?>
                                            </div>
                                            <div class="content">

                                                <h3>
                                                    <a href="job/<?= $job_title; ?>">
                                                        <?= ucwords(str_replace("-", " ", $job_title)); ?>
                                                    </a>
                                                </h3>


                                                <p id="shortDesc_<?= $job_title ?>">
                                                    <?= implode(' ', array_slice(explode(' ', $short_job_description), 0, 16)) . '..'; ?>
                                                    <button onclick="toggleDesc('<?= $job_title ?>')" class="view-more-btn">View
                                                        More</button>
                                                </p>


                                                <p id="fullDesc_<?= $job_title ?>" style="display:none;">
                                                    <?= $short_job_description; ?>
                                                    <button onclick="toggleDesc('<?= $job_title ?>')" class="view-more-btn">View
                                                        Less</button>
                                                </p>

                                                <div class="row-flex">

                                                    <div class="link">
                                                        <a href="job/<?= $job_title; ?>">
                                                            Apply Now <i class="fa-solid fa-arrow-up-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                }
                                echo '</div>';
                            } else
                            {
                                echo "<p class='mt-2 text-center  mt-4 fw-bold text-danger'>Currently, no job openings available. Please check back later!</p>";
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function toggleDesc(jobTitle) {
            var shortDesc = document.getElementById("shortDesc_" + jobTitle);
            var fullDesc = document.getElementById("fullDesc_" + jobTitle);

            if (shortDesc.style.display === "none") {
                shortDesc.style.display = "block";
                fullDesc.style.display = "none";
            } else {
                shortDesc.style.display = "none";
                fullDesc.style.display = "block";
            }
        }
    </script>
    <!-- Contact Section    S T A R T -->
    <div class="contact-form-section fix mb-5">
        <div class="contact-form-container-wrapper style1">
            <div class="container-fluid">
                <div class="contact-title-wrapper pb-425 section-bg2 section-padding border-radius">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7">
                                <div class="section-title text-left">
                                    <span class="subtitle wow fadeInUp" style="color:#f15e22"><img
                                            src="assets/img/icon/subTitleIcon.svg" alt="icon">Avconexpo</span>
                                    <h2 class="text-black wow fadeInUp" data-wow-delay=".3s">Apply For Job
                                    </h2>
                                </div>
                            </div>
                            <div class="col-xl-5">
                                <div class="title-content wow fadeInUp" data-wow-delay=".5s">
                                    <p class="text-black">
                                        We’re working to find new and better ways to help businesses succeed, and we’re
                                        looking for people like you to help shape tomorrow at AVCONEXPO.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="contact-form-wrapper style1 mt-n368">
                    <div class="row gx-60 gy-5">
                        <div class="col-xl-7">
                            <div class="contact-form style1 wow fadeInUp" data-wow-delay=".3s">
                                <h2>Application Form</h2>
                                <form class="row" method="POST" action="admin/save_career.php" id="enquiryForm"
                                    enctype="multipart/form-data">
                                    <div class="col-md-12">
                                         <label>Full Name:</label>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Enter Your Full Name" required>
                                    </div>
                                    <div class="col-md-12">
                                         <label>Email:</label>
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Enter Your Email" required>
                                    </div>
                                    <div class="col-md-12">
                                         <label>Phone Number:</label>
                                        <input type="number" name="phone" class="form-control"
                                            placeholder="Enter Your Phone Number" required>
                                    </div>
                                    <div class="col-md-12">
                                         <label>Job Position:</label>
                                        <input type="text" name="post" class="form-control"
                                            placeholder="Enter Job Position" required>
                                    </div>
                                    <div class="col-12">
                                        <label>CV/Resume:</label> <span class="text-danger fw-bold" style="font-size:12px">Only DOCX, PDF, and image files are allowed. Maximum file size: 500KB.</span>
                                        <input type="file" name="image_path" class="form-control" required
                                            accept=".jpg,.jpeg,.png,.gif,.pdf,.doc,.docx">
                                           
                                    </div>

                                    <div class="col-12 form-group mb-0 mt-4">
                                        <button class="theme-btn w-100" type="submit" name="submit">Submit Now <i
                                                class="fa-solid fa-arrow-right-long"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-xl-5">
                            <div class="contact-map style2 wow fadeInUp" data-wow-delay=".3s">
                                <iframe style="width: 100%;height: 587px;" allowfullscreen="" loading="lazy"
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7122.900348842653!2d81.003747!3d26.793791!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399be58bd02108ab%3A0xd8873eb8a3d56332!2sAVCONEXPO!5e0!3m2!1sen!2sin!4v1740644778538!5m2!1sen!2sin"
                                    style="width: 100%;height: 587px;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>

                                <div class="contact-info-wrapper style2">
                                    <h2>Contact Info</h2>
                                    <div class="shape-left">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="39"
                                            viewBox="0 0 29 39" fill="none">
                                            <path d="M0 0L29 39V0H0Z" fill="#1E292E" />
                                        </svg>
                                    </div>
                                    <div class="shape-right">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="39"
                                            viewBox="0 0 29 39" fill="none">
                                            <path d="M29 0L0 39V0H29Z" fill="#1E292E" />
                                        </svg>
                                    </div>
                                    <div class="contact-info style2">
                                        <div class="icon">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                        <div class="content">
                                            <h3>
                                                Pocket 1, 171, Golf City, Sector D, Bagiamau, Lucknow, Uttar Pradesh
                                                226030
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="contact-info style2">
                                        <div class="icon">
                                            <i class="fa-solid fa-phone-volume"></i>
                                        </div>
                                        <div class="content">
                                            <h3>
                                                <a href="tel:+91 7007729873">+91 7007729873, 7860563231</a>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="contact-info style2 border-none">
                                        <div class="icon">
                                            <i class="fa-regular fa-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <h3>
                                                <a href="mailto:consult@avconexpo.com"><span class="__cf_email__"
                                                        data-cfemail="consult@avconexpo.com">consult@avconexpo.com</span></a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer Section    S T A R T -->
    <?php
    include('footer.php');
    ?>



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

    <!--<< Ajax.js >>-->
    <script src="assets/js/ajax-mail.js"></script>
    <!--<< Main.js >>-->
    <script src="assets/js/main.js"></script>
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
                    url: 'admin/save_career.php',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        console.log(response);
                        if (response == 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'Message Sent!',
                                text: 'Your message has been sent successfully.',
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
            if (file && file.size > 512000) {
                alert("File size must be less than or equal to 500KB.");
                this.value = "";
            }
        });
    </script>
</body>

</html>