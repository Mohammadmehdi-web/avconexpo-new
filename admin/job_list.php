<?php include 'check_session.php' ?>
<?php include 'header.php' ?>
<?php include 'side_menu.php' ?>

<div class="content-body">
   <div class="container-fluid">
      <!-- row -->
      <div class="col-lg-12">
         <div class="card">
            <div class="card-header">
               <h4 class="card-title">Apply Job Lists</h4>
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table class="table header-border table-responsive-sm">
                     <thead>
                        <tr>
                           <th>S No.</th>
                           <th>Name</th>
                           <th>Email</th>
                           <th>Mobile No.</th>
                           <th>Job Name</th>
                           <th>Image</th>
                           <th>Action</th>

                        </tr>
                     </thead>
                     <tbody id="tableBody">
                        <?php
                        include '../db_con.php';

                        $sel_que = "select*from add_job";// where condition after make login
                        $res = mysqli_query($con, $sel_que);
                        $i = 1;
                        while ($row = mysqli_fetch_array($res))
                        {
                           ?>
                           <tr>
                              <td><?php echo $i; ?></td>
                              <td><?php echo $row['name']; ?></td>
                              <td><?php echo $row['email']; ?></td>
                              <td><?php echo $row['phone']; ?></td>
                              <td><?php echo $row['post']; ?></td>
                              <td>
                                 <?php
                                 $career = $row['image_path'];

                                 if ($career)
                                 {
                                    $ext = pathinfo($career, PATHINFO_EXTENSION);
                                    $ext = strtolower($ext);

                                    if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif']))
                                    {
                                       echo "<img src='$career' style='width:100px;'>";
                                    } elseif ($ext == 'pdf')
                                    {
                                       echo "<a href='$career' target='_blank'><img width='50' height='50' src='https://img.icons8.com/ios-filled/50/FA5252/pdf--v1.png' /></a>";
                                    } elseif (in_array($ext, ['doc', 'docx']))
                                    {
                                       echo "<a href='$career' target='_blank'><img width='50' height='50' src='https://img.icons8.com/glyph-neue/64/FA5252/word.png' /></a>";
                                    } else
                                    {
                                       echo "<a href='$career' target='_blank'><img width='50' height='50' src='https://img.icons8.com/glyph-neue/64/FA5252/word.png' /></a>";
                                    }
                                 } else
                                 {
                                    echo "No file";
                                 }
                                 ?>
                              </td>




                              <td class="text-center">
                                 <a type="submit" class="btn btn-primary shadow btn-xs sharp me-1"
                                    href="job_edit.php?user_id=<?php echo $row['id']; ?>" style="color:white;">
                                    <i class="fas fa-pencil-alt"></i>
                                 </a>
                                 <form method="POST" action="job_delete.php" style="display:inline;">
                                    <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" class="btn btn-danger shadow btn-xs sharp" name="delete"
                                       onclick="return confirm('Are you sure?')">
                                       <i class="fa fa-trash"></i>
                                    </button>
                                 </form>
                              </td>
                           </tr>
                        </tbody>
                        <?php
                        $i++;

                        }
                        ?>
                  </table>
               </div>
            </div>
            <div id="pagination" class="d-flex justify-content-center align-items-center mt-3 mb-5">
               <button id="prev" class="btn btn-primary mr-2" aria-label="Previous"
                  style="padding: 2px 6px;font-size: 0.813rem;background:rgb(54,48,98)">
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

               <button id="next" class="btn btn-primary ml-2" aria-label="Next"
                  style="padding: 2px 6px;font-size: 0.813rem;background:rgb(54,48,98)">
                  <i class="fa fa-arrow-right"></i>
               </button>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include 'footer.php' ?>
<script>
   document.addEventListener('DOMContentLoaded', function () {
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

      document.getElementById('prev').addEventListener('click', function () {
         if (currentPage > 1) {
            currentPage--;
            showPage(currentPage);
         }
      });

      document.getElementById('next').addEventListener('click', function () {
         if (currentPage < totalPages) {
            currentPage++;
            showPage(currentPage);
         }
      });

      showPage(1); // Show the first page by default
   });
</script>