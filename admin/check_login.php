<?php
session_start();

if (isset($_POST['Submit'])) {
    include '../db_con.php';

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Prepared statement to prevent SQL injection
    $stmt = $con->prepare("SELECT * FROM add_user WHERE email = ? AND password = ? AND TYPE = 'ADMIN'");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        session_regenerate_id(true);
        $_SESSION['login_status'] = true;
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['id'] = $row['user_id'];

        header("Location: dashboard.php");
        exit();
    } else {
        echo "<script>
                alert('Email or Password is incorrect!');
                window.location.href = 'login.php';
              </script>";
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}
?>
