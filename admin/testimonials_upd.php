<?php
if (isset($_POST['update'])) {
    include '../db_con.php';

    extract($_POST);
    $testi_id = mysqli_real_escape_string($con, $_POST['testi_id']);
    $paragraph = mysqli_real_escape_string($con, $_POST['paragraph']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $address = mysqli_real_escape_string($con, $_POST['address']);

    $image_uploaded = false; 

    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $check = getimagesize($_FILES['image']['tmp_name']);
        if ($check === false) {
            echo "<script>alert('File is not a valid image.');</script>";
            exit;
        }

       
        $image_extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $unique_image_name = uniqid('img_', true) . '.' . $image_extension;

      
        $target_dir = "testimonials_uploads/";
        $target_file = $target_dir . $unique_image_name;

      
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            $image_uploaded = true;
        } else {
            echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
            exit;
        }
    }

    // Update query
    $upd_que = "UPDATE add_price 
                SET paragraph = '$paragraph', 
                    name = '$name', 
                    address = '$address'";

  
    if ($image_uploaded) {
        $upd_que .= ", image = '$unique_image_name'";
    }

    $upd_que .= " WHERE testi_id = '$testi_id'";

    // Execute the update query
    if (mysqli_query($con, $upd_que)) {
        echo "<script>
                alert('Data updated successfully!');
                window.location='add_testimonial.php';
              </script>";
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
} else {
    header('location:add_testimonial.php');
}
?>
