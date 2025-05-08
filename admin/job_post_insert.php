<?php
// Include your database connection file
include('../db_con.php');

if (isset($_POST['submit'])) {
    // Start transaction
    $con->begin_transaction();

    try {
        // Retrieve form data
        $job_title_first = $_POST['job_title'];
        $job_title = str_replace(' ', '-', $job_title_first);
        $short_job_description = $_POST['short_job_description'];

        $job_description = $_POST['job_description'];
       

        // Insert product data into blogs table
        $sql = "INSERT INTO job_post (job_title, short_job_description, job_description)
                VALUES (?, ?, ?)";

        $stmt = $con->prepare($sql);
        $stmt->bind_param("sss", $job_title, $short_job_description, $short_job_description);

        if (!$stmt->execute()) {
            throw new Exception("Error inserting product: " . $stmt->error);
        }


        $product_id = $stmt->insert_id;
        // Commit transaction
        $con->commit();
        header('location:job_post_list.php');
    } catch (Exception $e) {
       
        $con->rollback();
        echo "Failed to insert Job : " . $e->getMessage();
    }

    $stmt->close();
    $con->close();
}
?>