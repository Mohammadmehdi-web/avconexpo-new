<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name       = $_POST['name'] ?? '';
    $phone      = $_POST['phone'] ?? '';
    $email      = $_POST['email'] ?? '';
    $job_title  = $_POST['job_title'] ?? '';
    $date       = date('Y-m-d H:i:s');

    if (!$name || !$phone || !$email || !$job_title) {
        echo 'error';
        exit;
    }


    $file_path = '';
    if (!empty($_FILES['image_path']['name'])) {
        $file      = $_FILES['image_path'];
        $size      = $file['size'];
        $ext       = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        $allowed   = ['jpg', 'jpeg', 'png', 'gif', 'pdf', 'doc', 'docx'];

        if ($size > 512000) { 
            echo 'file_too_large';
            exit;
        }

        if (!in_array($ext, $allowed)) {
            echo 'invalid_file';
            exit;
        }

 
        $file_path = 'apply_job/' . uniqid('file_', true) . '.' . $ext;
        move_uploaded_file($file['tmp_name'], $file_path);
    }

  
    include('../db_con.php');
    $stmt = $con->prepare("INSERT INTO add_job_post (name, phone, email, job_title, image_path, added_date) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $phone, $email, $job_title, $file_path, $date);

    echo $stmt->execute() ? 'success' : 'error';

    $stmt->close();
    $con->close();
}
?>
