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
                        <h4 class="card-title">Add Images</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="needs-validation" method="POST" action="images_insert.php" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-xl-12">
                                    
                                        
                                        <!-- Image Upload -->
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="images">Images <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="file" name="images[]" class="form-control" id="images[]" multiple required>
                                                <div class="invalid-feedback">Please upload images.</div>
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
