<?php
include 'check_session.php';
$user_id = $_GET['user_id'];
include '../db_con.php';

$que = "SELECT * FROM add_job WHERE id = $user_id";
$res = mysqli_query($con, $que);
$row = mysqli_fetch_array($res);

if (isset($_POST['submit']))
{
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $post = $_POST['post'];

    $image_path = '';
    if (isset($_FILES['image_path']) && $_FILES['image_path']['error'] == 0)
    {

        if ($_FILES['image_path']['size'] > 512000)
        {
            echo "File size should not exceed 500KB.";
            exit;
        }

        $image_ext = pathinfo($_FILES['image_path']['name'], PATHINFO_EXTENSION);
        $image_path = 'career_job/' . uniqid('career_', true) . '.' . $image_ext;
        move_uploaded_file($_FILES['image_path']['tmp_name'], $image_path);
    }

    $sql = "UPDATE add_job SET 
        name = '$name', 
        phone = '$phone', 
        email = '$email', 
        post = '$post',
        image_path = '$image_path' 
        WHERE id = $user_id";

    if ($con->query($sql) === TRUE)
    {
        header('Location: job_list.php');
    } else
    {
        echo "Error: " . $con->error;
    }
}
?>
<?php include 'header.php' ?>


<?php include 'side_menu.php' ?>

<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Update Job Career Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="needs-validation" method="POST" action="" novalidate
                                enctype="multipart/form-data">
                                <div class="row">

                                    <input type="hidden" name="donation_id" value="<?php echo $row['id']; ?>">
                                    <div class="form-group col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-form-label" for="validationCustom03">Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-12">
                                                <input type="text" name="name" class="form-control"
                                                    id="validationCustom03" placeholder="Enter Name"
                                                    value="<?php echo htmlspecialchars($row['name']); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-form-label" for="validationCustom01">Phone
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-12">
                                                <input type="number" name="phone" class="form-control"
                                                    id="validationCustom01" placeholder="Enter Phone Number"
                                                    value="<?php echo htmlspecialchars($row['phone']); ?>">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-form-label" for="validationCustom03">Email
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-12">
                                                <input type="email" name="email" class="form-control"
                                                    id="validationCustom03" placeholder="Enter Email"
                                                    value="<?php echo htmlspecialchars($row['email']); ?>">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-form-label" for="validationCustom03">Post Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-12">
                                                <input type="post" name="post" class="form-control"
                                                    id="validationCustom03" placeholder="Enter Job Name"
                                                    value="<?php echo htmlspecialchars($row['post']); ?>">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-form-label" for="validationCustom03">Image <span
                                                    class="pdf">(Pdf, Image, Docs
                                                    -500KB)</span></span>
                                                <span class="text-danger">*</span>
                                                <div class="col-lg-12">
                                                    <input type="file" name="image_path" class="form-control"
                                                        id="validationCustom03" accept=".jpg,.jpeg,.png,.gif,.pdf,.doc,.docx">
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <div class="form-group col-lg-12 ms-auto mt-4">
                                                <button type="submit" name="submit"
                                                    class="btn btn-primary mt-2 ml-5">Update</button>
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
</div>
<?php include 'footer.php' ?>
<script>
    document.querySelector('input[name="image_path"]').addEventListener('change', function () {
        const file = this.files[0];
        if (file && file.size > 512000) {
            alert("File size must be less than or equal to 500KB.");
            this.value = "";
        }
    });
</script>