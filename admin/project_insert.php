<?php
include '../db_con.php';

if (isset($_POST['submit'])) {
    $heading = $_POST['heading'];
    $paragraph = $_POST['paragraph'];

    // Handling file upload
    if (!empty($_FILES['images']['name'][0])) { // Check if a file is uploaded
        $imageName = uniqid() . "_" . basename($_FILES['images']['name'][0]); // Use only the first file
        move_uploaded_file($_FILES['images']['tmp_name'][0], "uploads/" . $imageName);
    } else {
        $imageName = ""; // No image uploaded
    }

    // Insert into database
    $query = "INSERT INTO add_project (heading, paragraph, images) VALUES ('$heading', '$paragraph', '$imageName')";
    mysqli_query($con, $query);

    // Redirect after successful insert
    header('Location: project_list.php');
    exit(); // Ensure script stops execution after redirection
}
?>
