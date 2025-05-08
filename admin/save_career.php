<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name       = $_POST['name'] ?? '';
    $phone      = $_POST['phone'] ?? '';
    $email      = $_POST['email'] ?? '';
    $post  = $_POST['post'] ?? '';
    $date       = date('Y-m-d H:i:s');

    if (!$name || !$phone || !$email || !$post) {
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

 
        $file_path = 'career_uploads/' . uniqid('file_', true) . '.' . $ext;
        move_uploaded_file($file['tmp_name'], $file_path);
    }

  
    include('../db_con.php');
    $stmt = $con->prepare("INSERT INTO add_job (name, phone, email, post, image_path, added_date) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $phone, $email, $post, $file_path, $date);

    echo $stmt->execute() ? 'success' : 'error';

    $stmt->close();
    $con->close();
}
?>
