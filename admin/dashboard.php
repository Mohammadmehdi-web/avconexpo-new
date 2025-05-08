<?php include 'check_session.php' ?>
<?php include 'header.php' ?>
<?php include 'side_menu.php' ?>
<!--**********************************
   Content body start
   ***********************************-->
<div class="content-body">
   <div class="container-fluid">
      <!-- row -->
      <div class="row">
         <div class="col-xl-4">
            <div class="card text-white bg-primary">
               <div class="card-header">
                  <h5 class="card-title text-white">Total Banner</h5>
                  <?php
                  include '../db_con.php';
                  $banner_query = "SELECT * FROM banners_projects";
                  $banner_query_run = mysqli_query($con, $banner_query);

                  if ($banner_total = mysqli_num_rows($banner_query_run)) {
                     echo '<p class="btn bg-white text-primary btn-card"> ' . $banner_total . ' </p>';
                  } else {
                     echo '<p class="btn bg-white text-primary btn-card"> No Data </p>';
                  }
                  ?>
               </div>
               <div class="card-body mb-0">
                  <h5 class="text-center text-white"><a href="banner_list.php" class="text-white">Banner List</a></h5>
               </div>
            </div>
         </div>
         <div class="col-xl-4">
            <div class="card text-white bg-primary">
               <div class="card-header">
                  <h5 class="card-title text-white">Total Projects</h5>
                  <?php
                  include '../db_con.php';
                  $project_query = "SELECT * FROM add_project";
                  $project_query_run = mysqli_query($con, $project_query);

                  if ($project_total = mysqli_num_rows($project_query_run)) {
                     echo '<p class="btn bg-white text-primary btn-card"> ' . $project_total . ' </p>';
                  } else {
                     echo '<p class="btn bg-white text-primary btn-card"> No Data </p>';
                  }
                  ?>
               </div>
               <div class="card-body mb-0">
                  <h5 class="text-center text-white"><a href="project_list.php" class="text-white">Project List</a></h5>
               </div>
            </div>
         </div>
         <div class="col-xl-4">
            <div class="card text-white bg-primary">
               <div class="card-header">
                  <h5 class="card-title text-white">Total Blogs</h5>
                  <?php
                  include '../db_con.php';
                  $blog_query = "SELECT * FROM blogs";
                  $blog_query_run = mysqli_query($con, $blog_query);

                  if ($blog_total = mysqli_num_rows($blog_query_run)) {
                     echo '<p class="btn bg-white text-primary btn-card"> ' . $blog_total . ' </p>';
                  } else {
                     echo '<p class="btn bg-white text-primary btn-card"> No Data </p>';
                  }
                  ?>
               </div>
               <div class="card-body mb-0">
                  <h5 class="text-center text-white"><a href="blog_list.php" class="text-white">Blog List</a></h5>
               </div>
            </div>
         </div>
         <div class="col-xl-3 d-none">
            <div class="card text-white bg-primary">
               <div class="card-header">
                  <h5 class="card-title text-white">Last Deposit</h5>
                  <p class="card-text"></p>
                  <a href="javascript:void(0);" class="btn bg-white text-primary btn-card">0</a>
               </div>
            </div>
         </div>
         <div class="col-xl-3 d-none">
            <div class="card text-white bg-primary">
               <div class="card-header">
                  <h5 class="card-title text-white">Total Deposit</h5>
                  <p class="card-text"></p>
                  <a href="javascript:void(0);" class="btn bg-white text-primary btn-card">0</a>
               </div>
            </div>
         </div>
         <div class="col-xl-3 d-none">
            <div class="card text-white bg-primary">
               <div class="card-header">
                  <h5 class="card-title text-white">Total Earned</h5>
                  <p class="card-text"></p>
                  <a href="javascript:void(0);" class="btn bg-white text-primary btn-card">0</a>
               </div>
            </div>
         </div>
         <div class="col-xl-3 d-none">
            <div class="card text-white bg-primary">
               <div class="card-header">
                  <h5 class="card-title text-white">Total Withdrawal</h5>
                  <p class="card-text"></p>
                  <a href="javascript:void(0);" class="btn bg-white text-primary btn-card">0</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--**********************************
   Content body end
   ***********************************-->
<!--**********************************
   Footer start
   ***********************************-->
<?php include 'footer.php' ?>
<!--**********************************
   Footer end
   ***********************************-->
<!--**********************************
   Support ticket button start
   ***********************************-->
<!--**********************************
   Support ticket button end
   ***********************************-->
</div>
<!--**********************************
   Main wrapper end
   ***********************************-->
<!--**********************************
   Scripts
   ***********************************-->
<!-- Required vendors -->

</body>

</html>