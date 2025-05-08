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
                        <h4 class="card-title">Add Blog</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="needs-validation" method="POST" action="blog_insert.php" enctype="multipart/form-data" >
                                <div class="row">
                                    <div class="col-xl-12">
                                    <div class="mb-3 row" id="client" >
                                            <label class="col-lg-4 col-form-label" for="details">Blog URL Name <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input class="form-control" name="blog_url" id="client" placeholder="Enter Blog URL Name" required >  
                                                
                                            </div>
                                        </div>
                                        <div class="mb-3 row" id="client" >
                                            <label class="col-lg-4 col-form-label" for="details">Blog Headings <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input class="form-control" name="blog_heading" id="client" placeholder="Blog Headings"required >  
                                                
                                            </div>
                                        </div>
                                        <!-- Image Upload -->
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="images">Images <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="file" name="images[]" class="form-control" id="images" multiple required>
                                                <div class="invalid-feedback">Please upload images.</div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row" id="client" >
                                            <label class="col-lg-4 col-form-label" for="details">Images Name <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input class="form-control" name="blog_point_two" id="client" placeholder="Enter Images Name"required >  
                                                
                                            </div>
                                        </div>

                                        <!-- Choose Type -->
                                        <!-- <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="type">Choose as <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" name="blog_type" id="type" required>
                                                    <option value="" disabled selected>Select</option>
                                                    <option value="Liquid_Storage_Tank_Blog">Liquid Storage Tank Blog</option>
                                                    <option value="Grain_Storage_Silos_Blog">Grain Storage Silos Blog</option>
                                                    
                                                </select>
                                                <div class="invalid-feedback">Please choose an option.</div>
                                            </div>
                                        </div> -->
                                          <!-- Product Description -->
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="details">Blog Title (SEO) <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" name="blog_desc_first" id="details" placeholder="Blog Title" required></textarea>
                                                <div class="invalid-feedback">Please enter Blog Title.</div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="details">Blog Meta Description  <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" name="blog_desc_second" id="details" placeholder="Enter Blog Meta Description" required></textarea>
                                                <div class="invalid-feedback">Please enter Blog Meta Description.</div>
                                            </div>
                                        </div>

                                        <!-- Project Details -->
                                        
                                        <div class="mb-3 row" id="capacity">
                                            <label class="col-lg-4 col-form-label" for="details">Blog meta keywords<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" name="blog_point_one" id="capacity" placeholder="Blog meta keywords" required >  </textarea>
                                                <div class="invalid-feedback">Blog meta keywords.</div>
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3 row d-none" id="client" >
                                            <label class="col-lg-4 col-form-label" for="details">Blog Point 3 <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input class="form-control" name="blog_point_three" id="client" placeholder="Enter Product Height">  
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3 row d-none" id="blog">
                                            <label class="col-lg-4 col-form-label" for="details">Blog Heading 2 <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" name="blog_hedng_two" id="" placeholder="Enter Product Information" ></textarea>
                                                <div class="invalid-feedback">Please enter Blog Heading.</div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="images">Blog Image <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="file" name="logos[]" class="form-control" id="logos" multiple required>
                                                <div class="invalid-feedback">Please upload images.</div>
                                            </div>
                                        </div>
                                        <div class="mb-6 row" id="blog">
                                            <label class="col-lg-4 col-form-label" for="details">Blog  <span class="text-danger">*</span></label>
                                            <div class="col-lg-12">
                                                <textarea class="form-control" name="blog_desc_two" id="blog_details" placeholder="Enter Product Advantage" ></textarea>
                                                <div class="invalid-feedback">Please enter Blog Advantage.</div>
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
<!-- Include required CSS and JS for Summernote -->
<!-- Include jQuery, Popper.js, Bootstrap JS, and Summernote JS -->
<!--<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>-->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>

<!-- Include Bootstrap and Summernote CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
<style>
    .note-editor h1 {
        color: #000000 !important; /* Set your preferred color */
        font-weight: bold !important;
    }
    .note-editor h2 {
        color: #000000 !important;
        font-weight: bold !important;
    }
    .note-editor h3 {
        color: #000000 !important;
        font-weight: bold !important;
    }
    .note-editor h4 {
        color: #000000 !important;
        font-weight: bold !important;
    }
    .note-editor h5 {
        color: #000000 !important;
        font-weight: bold !important;
    }
    .note-editor h6 {
        color: #000000 !important;
        font-weight: bold !important;
    }
    .note-editor p {
        color: #000000 !important; /* Set your preferred color */
        font-weight: normal !important; /* Optional: Change the font-weight as needed */
    }
    
.note-editor ol {
    list-style-type: disc !important;
    color:black;
}
::marker{
    margin-left:10px;
}
.note-editable {
        line-height: 1.8;  /* Customize the value as needed */
    }
</style>

<!-- Initialize Summernote -->
<script>
    $(document).ready(function() {
        $('#blog_details').summernote({
            height: 300,
            toolbar: [
                ['style', ['style', 'paragraph']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],  // Bullet and numbered list
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            callbacks: {
                onInit: function() {
                    // Set the line-height on editor's editable area
                    $('.note-editable').css('line-height', '1.8');  // Customize as needed
                    console.log("Summernote editor initialized with custom line-height!");
                }
            }
        });
    });
</script>

<script>
  $(document).ready(function() {
    // Close modal when the close button is clicked
    $('.close').on('click', function() {
      $(this).closest('.modal').modal('hide');
    });
  });
</script>