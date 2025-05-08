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
    <title>AVCONEXPO | Contact-Us</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css"/>
    <style>
    .single-select,
    .form-control,
    .form-select,
    textarea,
    input {

        border: none;
        background-color: #fff;
        border-radius: 10px;
    }
     .content h3 a{
            text-Transform:lowercase;
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
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">Contact Us</h1>
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
                        Contact Us
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Contact Section Start -->
    <section class="contact-section fix section-padding">
        <div class="container">
            <div class="contact-wrapper-form">
                <div class="row g-4">
                    <div class="col-xl-5">
                        <div class="contact-list-left">
                            <ul>
                                <li class="wow fadeInUp" data-wow-delay=".3s">
                                    <div class="icon">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                    <div class="content">
                                        <h4>Mailing Address</h4>
                                        <p>
                                            Pocket 1, 171, Golf City, Sector D, Bagiamau, Lucknow, Uttar Pradesh 226030
                                        </p>
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay=".6s">
                                    <div class="icon">
                                        <i class="fa-solid fa-phone-volume"></i>
                                    </div>
                                    <div class="content">
                                        <h4>Quick Contact</h4>
                                        <p>
                                            <a href="tel:+91 7007729873">+91-7007729873</a>, 
                                            <a href="tel:+91 7860563231">7860563231</a>
                                        </p>

                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay=".8s">
                                    <div class="icon">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                    <div class="content">
                                        <h4>support email</h4>
                                        <p>

                                            <a href="mailto:consult@avconexpo.com" class="link"><span
                                                    class="__cf_email__"
                                                    data-cfemail="consult@avconexpo.com">consult@avconexpo.com</span></a>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="contact-form-items wow fadeInUp" data-wow-delay=".3s">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <form method="POST" action="save_contact.php" id="enquiryForm"
                                        class="contact-form-box">
                                        <div class="row g-4">
                                            <div class="col-lg-6 wow fadeInUp">
                                                <div class="form-clt">
                                                    <input type="text" name="name" id="name" placeholder="Your Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 wow fadeInUp">
                                                <div class="form-clt">
                                                    <input type="number" name="phone" id="phone" placeholder="Phone Number" required class="form-control bg-white"> 
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-clt">
                                                 <input type="text" name="email" id="email" placeholder="Your Email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-clt">
                                                    <select class="single-select" aria-label="Shop order" name="subject"
                                                        id="subject" required>
                                                        <option value="">--Select a Service--</option>
                                                        <option value="architechture &amp; design">Architechture &amp;
                                                            Design </option>
                                                        <option value="business and technical consultancy">Business and
                                                            Technical Consultancy </option>
                                                        <option value="blast free mining and rock excavation">Blast free
                                                            mining and rock excavation</option>
                                                        <option value="engineering solutions">Engineering solutions
                                                        </option>
                                                        <option
                                                            value="hotel clubs resorts golf course horticulture and landscaping">
                                                            Hotel, clubs, resorts, Golf course, Horticulture &amp;
                                                            landscaping</option>

                                                        <option value="project management">Project Management (
                                                            Greenfield &amp; Brownfields)</option>
                                                        <option value="startups">Startups</option>
                                                        <option value="talent management">Talent Management</option>
                                                        <option value="trading and sourcing">Trading and sourcing
                                                        </option>


                                                        <option value="reviving and running the sick industries">
                                                            Reviving and Running the Sick industries</option>
                                                        <option value="waste management">Waste Management</option>
                                                        <option value="wellness equipment">Wellness Equipment</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-clt">
                                                    <textarea name="message" id="message"
                                                        placeholder="write message. . ."></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <button type="submit" class="theme-btn" name="submit">
                                                    Send Message
                                                    <i class="fa-solid fa-arrow-right-long"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="map-items">
        <div class="googpemap">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7122.900348842653!2d81.003747!3d26.793791!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399be58bd02108ab%3A0xd8873eb8a3d56332!2sAVCONEXPO!5e0!3m2!1sen!2sin!4v1740644778538!5m2!1sen!2sin"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    <script>
    var input = document.querySelector("#phone");
    var iti = window.intlTelInput(input, {
        initialCountry: "in",
        separateDialCode: true,
        preferredCountries: ["in", "us", "gb", "ca"],
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
    });

    $(document).ready(function() {
        $('#enquiryForm').submit(function(e) {
            e.preventDefault();
            var fullPhoneNumber = iti.getNumber();
            var formData = $(this).serialize() + "&phone=" + encodeURIComponent(fullPhoneNumber);

            $.ajax({
                url: 'save_contact.php',
                type: 'POST',
                data: formData,
                success: function(response) {
                    if (response == 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Message Sent!',
                            text: 'Your message has been sent successfully.',
                        }).then(function() {
                            $('#enquiryForm')[0].reset();
                            iti.setNumber("");
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Please fill All Fields.',
                        });
                    }
                },
                error: function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Please fill All Fields.',
                    });
                }
            });
        });
    });
    </script>
    <script>
    (function() {
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