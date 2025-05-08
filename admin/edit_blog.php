<?php
include 'check_session.php';
include 'header.php';
include 'side_menu.php';
include '../db_con.php'; // Include the database connection

// Fetch product details
$product_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($product_id > 0) {
    $query = "SELECT * FROM blogs WHERE id = $product_id";
    $res = mysqli_query($con, $query);
    $product = mysqli_fetch_array($res);
    // $stmt = $con->prepare($query);
    // $stmt->bind_param("i", $product_id);
    // $stmt->execute();
    // $result = $stmt->get_result();
    // $product = $result->fetch_assoc();
    
    if (!$product) {
        echo "Product not found.";
        exit;
    }
} else {
    echo "Invalid product ID.";
    exit;
}
?>
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Product</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="needs-validation" method="POST" action="blog_update.php" enctype="multipart/form-data" novalidate>
                                <input type="hidden" name="id" value="<?php echo $product['id']; ?>"> <!-- Hidden field to pass the ID -->
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="mb-3 row" id="client">
                                            <label class="col-lg-4 col-form-label" for="details">Blog URL Name <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input class="form-control" name="blog_url" id="client" placeholder="Enter Product URL Name" value="<?php echo str_replace('-',' ',$product['blog_url'] ); ?>" required>
                                            </div>
                                        </div>
                                        <div class="mb-3 row" id="client">
                                            <label class="col-lg-4 col-form-label" for="details">Blog Headings <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input class="form-control" name="blog_heading" id="client" placeholder="Enter Product Heading" value="<?php echo htmlspecialchars($product['blog_heading']); ?>" required>
                                            </div>
                                        </div>

                                        <!-- Image Upload -->
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="images">Images <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="file" name="images[]" class="form-control" id="images" multiple>
                                                <div class="invalid-feedback">Please upload images.</div>
                                                <!-- Optionally display current images here -->
                                            </div>
                                        </div>
                                         <div class="mb-3 row" id="client">
                                            <label class="col-lg-4 col-form-label" for="details">Images Name<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input class="form-control" name="blog_point_two" id="client" placeholder="Enter Images Name" value="<?php echo htmlspecialchars($product['blog_point_two']); ?>" required>
                                            </div>
                                        </div>

                                        <!-- Product Description -->
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="details">Blog Title (SEO) <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" name="blog_desc_first" id="details" placeholder="Enter Blog Title" required><?php echo htmlspecialchars($product['blog_desc_first']); ?></textarea>
                                                <div class="invalid-feedback">Please enter Blog Title.</div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="details">Blog Meta Description <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" name="blog_desc_second" id="details" placeholder="Enter Product Description" required><?php echo htmlspecialchars($product['blog_desc_second']); ?></textarea>
                                                <div class="invalid-feedback">Please enter Blog Meta Description.</div>
                                            </div>
                                        </div>

                                        <!-- Project Details -->
                                        <div class="mb-3 row" id="capacity">
                                            <label class="col-lg-4 col-form-label" for="details">Blog meta keywords <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" name="blog_point_one" id="capacity" placeholder="Enter Capacity" required> <?php echo htmlspecialchars($product['blog_point_one']); ?></textarea>
                                                 <div class="invalid-feedback">Please enter Blog meta keywords.</div>
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3 row d-none" id="client">
                                            <label class="col-lg-4 col-form-label" for="details">Blog Point 3<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input class="form-control" name="blog_point_three" id="client" placeholder="Enter Product Height" value="<?php echo htmlspecialchars($product['blog_point_three']); ?>" required>
                                            </div>
                                        </div>

                                        <!-- Product Information -->
                                        <div class="mb-3 row d-none" id="blog">
                                            <label class="col-lg-4 col-form-label" for="details">Blog heading Second <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" name="blog_hedng_two" placeholder="Enter Product Information"><?php echo htmlspecialchars($product['blog_hedng_two']); ?></textarea>
                                                <div class="invalid-feedback">Please enter Product Information.</div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="images">Blog Images <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="file" name="logos[]" class="form-control" id="" multiple>
                                                <div class="invalid-feedback">Please upload images.</div>
                                                <!-- Optionally display current images here -->
                                            </div>
                                        </div>
                                        <div class="mb-6 row" id="blog">
                                            <label class="col-lg-4 col-form-label" for="details">Blog <span class="text-danger">*</span></label>
                                            <div class="col-lg-12">
                                                <textarea class="form-control" name="blog_desc_two" id="blog_details" placeholder="Enter Product Advantage"><?php echo htmlspecialchars($product['blog_desc_two']); ?></textarea>
                                                <div class="invalid-feedback">Please enter Blog.</div>
                                            </div>
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="mb-3 row">
                                            <div class="col-lg-8 ms-auto">
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

<?php include 'footer.php'; ?>
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
    li {
    list-style: black;
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