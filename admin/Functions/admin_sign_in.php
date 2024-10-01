<?php
session_start();
include '../../database/db.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $admin_username = $_POST['admin_username'];
    $admin_password = $_POST['admin_password'];

    // Fetch admin data from the database
    $query = "SELECT * FROM admin WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $admin_username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $admin = $result->fetch_assoc();
        
        // Verify password
        if (password_verify($admin_password, $admin['password'])) {
            // Regenerate session ID
            session_regenerate_id(true);
            
            // Set session variables
            $_SESSION['admin_id'] = $admin['id'];
            $_SESSION['admin_username'] = $admin['username'];
            
            // Redirect to admin dashboard
            header('Location: ../admin_dashboard.php');
            exit();
        } else {
            // Redirect to login with error message
            $_SESSION['error'] = "Invalid username or password.";
            header('Location: ../admin_login.php');
            exit();
        }
    } else {
        // Redirect to login with error message
        $_SESSION['error'] = "Invalid username or password.";
        header('Location: ../admin_login.php');
        exit();
    }
}
?>
