<?php include 'check_session.php' ?>
<?php include 'header.php' ?>
<?php include 'side_menu.php' ?>
<div class="content-body">
   <div class="container-fluid">
      <!-- row -->
      <div class="col-lg-12">
         <div class="card">
            <div class="card-header">
               <h4 class="card-title">Blog Lists</h4>
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table class="table header-border table-responsive-sm">
                     <thead>
                        <tr style="text-align:center;">
                           <th>S.No.</th>
                           <th>Image</th>
                           <!-- <th>Logos</th> -->
                           <th>Type</th>
                           <th>URL Name</th>
                           <th>Heading</th>
                           <th colspan="2">Action</th>
                        </tr>
                     </thead>
                     <tbody id="tableBody">
                        <?php
                        include '../db_con.php';

                        // Fetch products
                        $sel_que = "SELECT * FROM blogs"; // where condition after make login
                        $res = mysqli_query($con, $sel_que);
                        $i = 1;

                        while ($row = mysqli_fetch_array($res)) {
                           // Fetch the primary image for the product
                           $image_query = "SELECT * FROM blogs_images WHERE blog_id = '{$row['id']}' LIMIT 1";
                           $image_result = mysqli_query($con, $image_query);
                           $image_row = mysqli_fetch_array($image_result);
                           $image_path = isset($image_row['image']) ? $image_row['image'] : 'default-image.jpg'; // Default image if no image found

                           // Display the product row
                        ?>
                           <tr>
                              <td><?php echo $i; ?></td>
                              <td>
                                 <img src="../blog/blog_uploads/<?php echo $image_path; ?>" alt="Image" style="max-width: 100px; height: auto;">
                              </td>
                              <td><?php echo $row['blog_url']; ?></td>
                              <td><?php echo $row['blog_heading']; ?></td>
                              <td>
                                 <a type="submit" class="btn btn-primary shadow btn-xs sharp me-1" href="edit_blog.php?id=<?php echo $row['id']; ?>" style="color:white;">
                                    <i class="fas fa-pencil-alt"></i>
                                 </a>
                              </td>
                              <td>
                                 <form method="POST" action="blog_dlt.php">
                                    <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" class="btn btn-danger shadow btn-xs sharp" name="delete" onclick="return confirm('Are you sure?')">
                                       <i class="fa fa-trash"></i>
                                    </button>
                                 </form>
                              </td>
                           </tr>
                           <?php

                           // Fetch and display logos for the current product
                           $logos_query = "SELECT * FROM blogs_images WHERE blog_id = '{$row['id']}' AND logos != '{$image_row['logos']}'"; // Exclude primary image
                           $logos_result = mysqli_query($con, $logos_query);
                           while ($logo_row = mysqli_fetch_array($logos_result)) {
                           ?>
                              <tr>
                                 <td></td>
                                 <td>
                                    <img src="../blog/blog_uploads/<?php echo $logo_row['logos']; ?>" alt="Logo" style="max-width: 100px; height: auto;">
                                 </td>

                                 <td><?php echo $row['blog_url']; ?></td>
                                 <td><?php echo $row['blog_heading']; ?></td>
                                 <td><a type="submit" class="btn btn-primary shadow btn-xs sharp me-1" href="edit_blog.php?id=<?php echo $row['id']; ?>" style="color:white;"><i class="fas fa-pencil-alt"></i></a></td>
                                 <td>
                                    <form method="POST" action="blog_dlt.php">
                                       <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">
                                       <button type="submit" class="btn btn-danger shadow btn-xs sharp" name="delete" onclick="return confirm('are you sure?')"><i class="fa fa-trash"></i></button>
                                    </form>
                                 </td>
                              </tr>
                        <?php
                           }
                           $i++;
                        }
                        ?>
                     </tbody>
                  </table>


               </div>

            </div>
            <div id="pagination" class="d-flex justify-content-center align-items-center mt-3 mb-5">
               <button id="prev" class="btn btn-primary mr-2" aria-label="Previous" style="padding: 2px 6px;
        font-size: 0.813rem;background:rgb(54,48,98)">
                  <i class="fa fa-arrow-left"></i>
               </button>

               <div id="pageNumbers" class="mx-3">
                  <label>
                     <input type="checkbox" id="page1"> Page 1
                  </label>
                  <label>
                     <input type="checkbox" id="page2"> Page 2
                  </label>
                  <!-- Add more checkboxes as needed -->
               </div>

               <button id="next" class="btn btn-primary ml-2" aria-label="Next" style="padding: 2px 6px;
        font-size: 0.813rem;background:rgb(54,48,98)">
                  <i class="fa fa-arrow-right"></i>
               </button>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include 'footer.php' ?>
<script>
   document.addEventListener('DOMContentLoaded', function() {
      const rowsPerPage = 7;
      const rows = document.querySelectorAll('#tableBody tr');
      const totalPages = Math.ceil(rows.length / rowsPerPage);
      let currentPage = 1;

      function showPage(page) {
         rows.forEach((row, index) => {
            row.style.display = (index >= (page - 1) * rowsPerPage && index < page * rowsPerPage) ? 'table-row' : 'none';
         });
         updateButtons(page);
      }

      function updateButtons(page) {
         document.getElementById('pageNumbers').textContent = `Page ${page} of ${totalPages}`;
         document.getElementById('prev').disabled = page === 1;
         document.getElementById('next').disabled = page === totalPages;
      }

      document.getElementById('prev').addEventListener('click', function() {
         if (currentPage > 1) {
            currentPage--;
            showPage(currentPage);
         }
      });

      document.getElementById('next').addEventListener('click', function() {
         if (currentPage < totalPages) {
            currentPage++;
            showPage(currentPage);
         }
      });

      showPage(1); // Show the first page by default
   });
</script>