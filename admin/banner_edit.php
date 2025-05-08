<?php include 'header.php'; ?>
<?php include 'side_menu.php'; ?>
<?php
$user_id = $_GET['user_id'];
include '../db_con.php';
$que = "SELECT * FROM banners_projects WHERE id = $user_id";
$res = mysqli_query($con, $que);
$row = mysqli_fetch_array($res);
?>
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Update Banner and Project</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="needs-validation" method="POST" action="banner_update.php" enctype="multipart/form-data" novalidate>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <!-- Image Upload -->
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="image">Image <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                
                                                <input type="hidden" name="banner_id" class="form-control" value="<?php echo htmlspecialchars($row['id']); ?>">

                                                <input type="file" name="image" class="form-control" id="image">

                                                <div class="invalid-feedback">Please upload an image.</div>
                                            </div>
                                        </div>

                                        <!-- Choose Type -->
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="type">Choose as <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" name="type" id="type" required>
                                                    <option value="" disabled>Select</option>
                                                    <option value="Banner" <?php echo ($row['type'] == 'Banner') ? 'selected' : ''; ?>>Banner</option>
                                                    <option value="Project" <?php echo ($row['type'] == 'Project') ? 'selected' : ''; ?>>Project</option>
                                                    <!--<option value="Blog" <?php echo ($row['type'] == 'Blog') ? 'selected' : ''; ?>>Blog</option>-->
                                                </select>
                                                <div class="invalid-feedback">Please choose an option.</div>
                                            </div>
                                        </div>

                                        <!-- Project Client Details -->
                                        <div class="mb-3 row" id="client">
                                            <label class="col-lg-4 col-form-label" for="client">Project Client Details <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input class="form-control" name="client" id="client" placeholder="Enter client details..." value="<?php echo htmlspecialchars($row['client']); ?>">
                                            </div>
                                        </div>

                                        <!-- Project Capacity -->
                                        <div class="mb-3 row" id="capacity">
                                            <label class="col-lg-4 col-form-label" for="capacity">Project Capacity <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input class="form-control" name="capacity" id="capacity" placeholder="Enter capacity details..." value="<?php echo htmlspecialchars($row['capacity']); ?>">
                                            </div>
                                        </div>

                                        <!-- Project Details -->
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="details">Project/Blog Headings <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" name="details" id="details" placeholder="Enter project details..." required><?php echo htmlspecialchars($row['details']); ?></textarea>
                                                <div class="invalid-feedback">Please enter Project/Blog Headings</div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row" id="blog">
                                            <label class="col-lg-4 col-form-label" for="details">Blog Details <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" name="blog_details" id="blog_details" placeholder="Enter project details..." required><?php echo htmlspecialchars($row['blog_details']); ?></textarea>
                                                <div class="invalid-feedback">Please enter project details.</div>
                                            </div>
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="mb-3 row">
                                            <div class="col-lg-8 ms-auto">
                                                <input type="hidden" name="id" value="<?php echo $user_id; ?>">
                                                <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
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

<!-- Include jQuery library in your HTML -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
    // Hide client and capacity details initially
    $('#client').hide();
    $('#capacity').hide();
    $('#blog').hide();

    // Function to show/hide based on selection
    $('#type').change(function() {
        var selectedType = $(this).val();

        if (selectedType === 'Project') {
            // Show Project client details and Project capacity
            $('#client').show();
            $('#capacity').show();
        } 
        else if (selectedType === 'Blog') {
            // Show Project client details and Project capacity
            $('#blog').show();
           // $('#capacity').show();
        } else {
            // Hide Project client details and Project capacity
            $('#client').hide();
            $('#capacity').hide();
        }
    });

    // Trigger change event on page load to set initial visibility
    $('#type').trigger('change');
});
</script>
<?php include 'footer.php'; ?>
