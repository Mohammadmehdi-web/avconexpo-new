<?php

include('../db_con.php');

if (isset($_POST['submit'])) {
    // Start transaction
    $con->begin_transaction();

    try {
        // Directory to save uploaded images
        $target_dir = "gallery_uploads/";

        // Handle multiple file uploads for images
        foreach ($_FILES['images']['name'] as $key => $image_name) {
            $target_file = $target_dir . basename($image_name);
            
            // Move the uploaded file to the server
            if (move_uploaded_file($_FILES['images']['tmp_name'][$key], $target_file)) {
                // Insert image data into gallery table
                $sql = "INSERT INTO gallery (image) VALUES (?)";
                $stmt = $con->prepare($sql);
                $stmt->bind_param("s", $image_name);  // Use "s" for string type
                
                if (!$stmt->execute()) {
                    throw new Exception("Error inserting image: " . $stmt->error);
                }
            } else {
                throw new Exception("Error uploading image: $image_name");
            }
        }

        // Commit transaction
        $con->commit();

        // Redirect to gallery list page after successful insertion
        header('Location: gallery_list.php');
        exit;

    } catch (Exception $e) {
        // Rollback transaction on error
        $con->rollback();
        echo "Failed to insert images: " . $e->getMessage();
    }

    // Close statement and connection
    if (isset($stmt)) {
        $stmt->close();
    }
    $con->close();
}
?>
