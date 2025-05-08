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
                        <h4 class="card-title">Add Banner</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="needs-validation" method="POST" action="banner_insert.php" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <!-- Image Upload -->
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="image">Image <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="file" name="image" class="form-control" id="image" required>
                                                <div class="invalid-feedback">Please upload an image.</div>
                                            </div>
                                        </div>

                                        <!-- Choose Type -->
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="type">Choose as <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" name="type" id="type" required>
                                                    <option value="" disabled selected>Select</option>
                                                    <option value="Banner">Banner</option>
                                                    <option value="Project">Project</option>
                                                    <!-- <option value="Blog">Blog</option> -->
                                                </select>
                                                <div class="invalid-feedback">Please choose an option.</div>
                                            </div>
                                        </div>

                                        <!-- Project Details -->
                                        <div class="mb-3 row" id="client" >
                                            <label class="col-lg-4 col-form-label" for="details">Project client Details <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input class="form-control" name="client" id="client" placeholder="Enter client details..." ></input>
                                                
                                            </div>
                                        </div>
                                        <div class="mb-3 row" id="capacity">
                                            <label class="col-lg-4 col-form-label" for="details">Project capacity <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input class="form-control" name="capacity" id="capacity" placeholder="Enter capacity details..." ></input>
                                               
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="details">Project Headings <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" name="details" id="details" placeholder="Enter project details..." required></textarea>
                                                <div class="invalid-feedback">Please enter Project/Blog Headings.</div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row" id="blog">
                                            <label class="col-lg-4 col-form-label" for="details">Blog Details <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" name="blog_details" id="blog_details" placeholder="Enter Blog details..." ></textarea>
                                                <div class="invalid-feedback">Please enter Blog details.</div>
                                            </div>
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="mb-3 row">
                                            <div class="col-lg-8 ms-auto">
                                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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

<?php include 'footer.php' ?>

<!-- Include jQuery library in your HTML -->
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

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
            $('#blog').hide();
        } 
       else if (selectedType === 'Blog') {
            // Show Project client details and Project capacity
            $('#blog').show();
            $('#client').hide();
            $('#capacity').hide();
           // $('#capacity').show();
        } else {
            // Hide Project client details and Project capacity
            $('#client').hide();
            $('#capacity').hide();
            $('#blog').hide();
        }
    });
});
</script>
