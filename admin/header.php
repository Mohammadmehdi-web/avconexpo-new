<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="keywords" content="admin, dashboard" />
      <meta name="author" content="DexignZone" />
      <meta name="robots" content="index, follow" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Admin Dashboard </title>
      <!-- Favicon icon -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
      <link rel="stylesheet" href="vendor/chartist/css/chartist.min.css">
      <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
      <link href="vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
     
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

   </head>
   <body>
      <!--*******************
         Preloader start
         ********************-->
      <div id="preloader" style="display: none;">
         <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
         </div>
      </div>
      <!--*******************
         Preloader end
         ********************-->
      <!--**********************************
         Main wrapper start
         ***********************************-->
      <div id="main-wrapper">
      <!--**********************************
         Nav header start
         ***********************************-->
      <div class="nav-header">
         <a href="dashboard.php" class="brand-logo">
         <img src="images/favicon.png" style="height:60px; width: 60px;" alt="">
         </a>
         <div class="nav-control">
                <div class="hamburger">
                   <span class="line"></span>
                   <span class="line"></span>
                   <span class="line"></span>
                </div>
         </div>
      </div>
      <!--**********************************
         Nav header end
         ***********************************-->
    
      <div class="header">
         <div class="header-content">
            <nav class="navbar navbar-expand">
               <div class="collapse navbar-collapse justify-content-between">
                  <div class="header-left">
                     <div class="dashboard_bar">
                        Dashboard
                     </div><br>
                  </div>
                  <ul class="navbar-nav header-right">
                     <li class="nav-item dropdown notification_dropdown d-none">
                        <a class="nav-link  ai-icon" href="#" role="button" data-bs-toggle="dropdown">
                           <i class="flaticon-381-ring"></i>
                           <div class="pulse-css"></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end ">
                           <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3" style="height:380px;">
                              <ul class="timeline">
                                 <li>
                                    <div class="timeline-panel">
                                       <div class="media me-2">
                                          <img alt="image" width="50" src="images/avatar/1.jpg">
                                       </div>
                                       <div class="media-body">
                                          <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                          <small class="d-block">29 July 2020 - 02:26 PM</small>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="timeline-panel">
                                       <div class="media me-2 media-info">
                                          KG
                                       </div>
                                       <div class="media-body">
                                          <h6 class="mb-1">Resport created successfully</h6>
                                          <small class="d-block">29 July 2020 - 02:26 PM</small>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="timeline-panel">
                                       <div class="media me-2 media-success">
                                          <i class="fa fa-home"></i>
                                       </div>
                                       <div class="media-body">
                                          <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                          <small class="d-block">29 July 2020 - 02:26 PM</small>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="timeline-panel">
                                       <div class="media me-2">
                                          <img alt="image" width="50" src="images/avatar/1.jpg">
                                       </div>
                                       <div class="media-body">
                                          <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                          <small class="d-block">29 July 2020 - 02:26 PM</small>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="timeline-panel">
                                       <div class="media me-2 media-danger">
                                          KG
                                       </div>
                                       <div class="media-body">
                                          <h6 class="mb-1">Resport created successfully</h6>
                                          <small class="d-block">29 July 2020 - 02:26 PM</small>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="timeline-panel">
                                       <div class="media me-2 media-primary">
                                          <i class="fa fa-home"></i>
                                       </div>
                                       <div class="media-body">
                                          <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                          <small class="d-block">29 July 2020 - 02:26 PM</small>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                           <a class="all-notification" href="#">See all notifications <i class="ti-arrow-right"></i></a>
                        </div>
                     </li>
                     <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">
                           <img src="images/favicon.png" width="20" alt=""/>
                           <div class="header-info"class="col-xs-10">
                              <!-- <span><?php echo $_SESSION['firstname'];?></span> -->
                              <small>Super Admin</small>
                           </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                          
                           <a href="logout.php" class="dropdown-item ai-icon">
                              <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                 <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                 <polyline points="16 17 21 12 16 7"></polyline>
                                 <line x1="21" y1="12" x2="9" y2="12"></line>
                              </svg>
                              <span class="ms-2">Logout </span>
                           </a>
                        </div>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
      <!--**********************************
         Header end ti-comment-alt
         ***********************************-->