
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
                        <h4 class="card-title">Add New Job Post</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="needs-validation" method="POST" action="job_post_insert.php">
                                <div class="row">
                                    <div class="col-xl-12 mt-3">
                                    <div class="mb-3 row" id="job_title" >
                                            <label class="col-lg-4 col-form-label" for="details">Job Title Name<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input class="form-control" name="job_title" id="job_title" placeholder="Enter Job Title Name" required >  
                                                
                                            </div>
                                        </div>
                                          <!-- Product Description -->
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="short_job_description">Short Job Description<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" name="short_job_description" id="short_job_description" placeholder="Enter Short Job Description" required></textarea>
                                                <div class="invalid-feedback">Please Enter Short Job Description.</div>
                                            </div>
                                        </div>
                                    
                                        <div class="mb-6 row" id="blog">
                                            <label class="col-lg-4 col-form-label" for="details">Job Description  <span class="text-danger">*</span></label>
                                            <div class="col-lg-12">
                                                <textarea class="form-control" name="job_description" id="job_desc" placeholder="Enter Job Description" ></textarea>
                                                <div class="invalid-feedback">Please Enter Job Description.</div>
                                            </div>
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="mb-3 row">
                                            <div class="col-lg-12 ms-auto">
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
        $('#job_desc').summernote({
            height: 300,
            toolbar: [
                ['style', ['style', 'paragraph']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            callbacks: {
                onInit: function() {
                  
                    $('.note-editable').css('line-height', '1.8');
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