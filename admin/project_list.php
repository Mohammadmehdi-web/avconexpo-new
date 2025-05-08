<?php include 'check_session.php' ?>
<?php include 'header.php' ?>
<?php include 'side_menu.php' ?>
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Project Lists</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table header-border table-responsive-sm">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Image</th>

                                    <th>Project Heading</th>
                                    <th>Paragraph</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody id="tableBody">
                                <?php
                                 include '../db_con.php';

                                 $sel_que = "SELECT * FROM add_project"; // Fetch all projects
                                 $res = mysqli_query($con, $sel_que);
                                 $i = 1;

                                 while ($row = mysqli_fetch_array($res)) {
                                 ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td>
                                    <img src="uploads/<?php echo$row['images']; ?>" alt="Image"
                                    style="max-width: 100px; height: auto;">
                                    </td>

                                    <td><?php echo $row['heading']; ?></td>
                                    <!-- Display Project Heading -->
                                    <td><?php echo $row['paragraph'];?> </td>
                                    <td>
                                        <a class="btn btn-primary shadow btn-xs sharp me-1"
                                            href="project_edit.php?user_id=<?php echo $row['id']; ?>"
                                            style="color:white;">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <form method="POST" action="project_dlt.php">
                                            <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">
                                            <button type="submit" class="btn btn-danger shadow btn-xs sharp"
                                                name="delete" onclick="return confirm('Are you sure?')">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                <?php 
        $i++;
    } 
    ?>
                            </tbody>

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
document.addEventListener('DOMContentLoaded', function() {
    const rowsPerPage = 7;
    const rows = document.querySelectorAll('#tableBody tr');
    const totalPages = Math.ceil(rows.length / rowsPerPage);
    let currentPage = 1;

    function showPage(page) {
        rows.forEach((row, index) => {
            row.style.display = (index >= (page - 1) * rowsPerPage && index < page * rowsPerPage) ?
                'table-row' : 'none';
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