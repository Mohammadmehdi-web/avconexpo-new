<?php
session_start();

if (isset($_POST['submit'])) {
    include '../db_con.php';

    // Generate random price ID
    $testi_id = rand(111, 9999999);

    $paragraph = mysqli_real_escape_string($con, $_POST['paragraph']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $address = mysqli_real_escape_string($con, $_POST['address']);


    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
       
        $original_image_name = $_FILES['image']['name'];
        $image_extension = strtolower(pathinfo($original_image_name, PATHINFO_EXTENSION)); 

       
        $unique_image_name = uniqid('img_', true) . '.' . $image_extension;

      
        $target_dir = "testimonials_uploads/";
        $target_file = $target_dir . $unique_image_name;

      
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0755, true); 
        }

      
        $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
        if (in_array($image_extension, $allowed_extensions)) {
           
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
              
                $ins_que = "INSERT INTO add_price (testi_id, paragraph, name, address, image) 
                            VALUES ('$testi_id', '$paragraph', '$name', '$address', '$unique_image_name')";

                // Execute the query
                if (mysqli_query($con, $ins_que)) {
                    echo "<script>
                        alert('Data saved successfully!');
                        window.location='add_testimonial.php';
                        </script>";
                } else {
                    echo "Database Error: " . mysqli_error($con);
                }
            } else {
                echo "Sorry, there was an error uploading your file to the server.";
            }
        } else {
            echo "Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.";
        }
    } else {
        echo "No file was uploaded or there was an error with the file upload.";
    }
} else {
    header('location:add_testimonial.php');
}
?>
