<?php include 'check_session.php' ?>
<?php include 'header.php' ?>
<?php include 'side_menu.php' ?>

<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Testimonial</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="needs-validation" method="POST" action="testimonials_insert.php"
                                enctype="multipart/form-data">
                                <div class="row">
                                    <div class="form-group col-xl-6">
                                        <label class="col-form-label" for="validationCustom01">Client Review</label>
                                        <input type="text" name="paragraph" class="form-control" id="validationCustom01"
                                            placeholder="Enter Client Review" required>
                                    </div>
                                    <div class="form-group col-xl-6">
                                        <label class="col-form-label" for="validationCustom03">Client Name</label>
                                        <input type="text" name="name" class="form-control" id="validationCustom03"
                                            placeholder="Enter Client Name" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-xl-6">
                                        <label class="col-form-label" for="validationCustom03">Address</label>
                                        <input type="text" name="address" class="form-control" id="validationCustom03"
                                            placeholder="Enter Address" required>
                                    </div>
                                    <div class="form-group col-xl-6">
                                        <label class="col-form-label" for="validationCustom03">Image</label>
                                        <input type="file" name="image" accept="image/*" class="form-control"
                                            id="validationCustom03" required>

                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-lg-8 ms-auto">
                                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Testimonial List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table header-border table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th>S No.</th>
                                        <th>Client Name</th>
                                        <th>Client Review</th>
                                        <th>Address</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="tableBody">
                                    <?php
                           include '../db_con.php';

                           $sel_que = "select*from add_price"; // where condition after make login
                           $res = mysqli_query($con, $sel_que);
                           $i = 1;
                           while ($row = mysqli_fetch_array($res)) {
                           ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row['paragraph']; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['address']; ?></td>
                                        <td><img src="testimonials_uploads/<?php echo $row['image']; ?>" width="100px">
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-primary shadow btn-xs sharp me-1"> <a
                                                    href="testimonials_edit.php?testi_id=<?php echo $row['testi_id']; ?>"
                                                    style="color:white;"><i class="fas fa-pencil-alt"></i></a></button>
                                        </td>
                                        <td>
                                            <form method="POST" action="testimonials_dlt.php">
                                                <input type="hidden" name="testi_id"
                                                    value="<?php echo $row['testi_id']; ?>">
                                                <button type="submit" class="btn btn-danger shadow btn-xs sharp"
                                                    name="delete" onclick="return confirm('are you sure?')"><i
                                                        class="fa fa-trash"></i></button>
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