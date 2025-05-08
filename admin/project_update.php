<?php
include '../db_con.php';

if (isset($_POST['submit'])) {
    // Escape user inputs to prevent SQL injection
    $project_id = mysqli_real_escape_string($con, $_POST['project_id']); 
    $paragraph = mysqli_real_escape_string($con, $_POST['paragraph']);
    $heading = mysqli_real_escape_string($con, $_POST['heading']);

    $image_uploaded = false;
    $unique_image_name = "";

    // Check if an image is uploaded
    if (isset($_FILES['images']) && $_FILES['images']['error'][0] === UPLOAD_ERR_OK) {
        $check = getimagesize($_FILES['images']['tmp_name'][0]);
        if ($check === false) {
            echo "<script>alert('File is not a valid image.');</script>";
            exit;
        }

        // Generate a unique filename
        $image_extension = pathinfo($_FILES['images']['name'][0], PATHINFO_EXTENSION);
        $unique_image_name = uniqid('img_', true) . '.' . $image_extension;

        // Set the target directory and file path
        $target_dir = "uploads/";
        $target_file = $target_dir . $unique_image_name;

        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES['images']['tmp_name'][0], $target_file)) {
            $image_uploaded = true;
        } else {
            echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
            exit;
        }
    }

    // Update query
    $upd_que = "UPDATE add_project SET heading = '$heading', paragraph = '$paragraph'";

    // Append the image column only if an image was uploaded
    if ($image_uploaded) {
        $upd_que .= ", images = '$unique_image_name'";
    }

    $upd_que .= " WHERE id = '$project_id'";

    // Execute the update query
    if (mysqli_query($con, $upd_que)) {
        echo "<script>
                alert('Data updated successfully!');
                window.location='project_list.php';
              </script>";
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
} else {
    header('Location: project_list.php');
    exit();
}
?>
