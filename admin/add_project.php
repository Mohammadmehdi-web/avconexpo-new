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
                        <h4 class="card-title">Add Project</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="needs-validation" method="POST" action="project_insert.php" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-xl-12">
                                       
                                        <!-- Image Upload -->
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="image">Image <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="file" name="images[]" class="form-control" id="images" required>
                                                <div class="invalid-feedback">Please upload an image.</div>
                                            </div>
                                        </div>

                                        <!-- Choose Type -->
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="type">Project Heading <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" name="heading" class="form-control" id="heading" required>
                                                <div class="invalid-feedback">Please choose an option.</div>
                                            </div>
                                        </div>
                                          <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="details">Project Details<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" name="paragraph" id="paragraph" placeholder="Enter project details..." required></textarea>
                                                <div class="invalid-feedback">Please enter Project/Blog Headings.</div>
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
       
        $('#client').hide();
        $('#capacity').hide();
        $('#blog').hide();

        
        $('#type').change(function() {
            var selectedType = $(this).val();

            if (selectedType === 'Project') {
                
                $('#client').show();
                $('#capacity').show();
                $('#blog').hide();
            } else if (selectedType === 'Blog') {
               
                $('#blog').show();
                $('#client').hide();
                $('#capacity').hide();
              
            } else {
                
                $('#client').hide();
                $('#capacity').hide();
                $('#blog').hide();
            }
        });
    });
</script>