<?php
// role_management.php
require_once 'config.php';

if (!isset($_SESSION['email']) || !isAdmin($_SESSION['email'])) {
    header('Location: login.php');
    exit();
}

// HTML content for role management (customize as needed)
?>

<!DOCTYPE html>
<html>
<head>
    <title>Role Management</title>
</head>
<body>
    <h1>Role Management</h1>
    <p>This page is accessible only by admins.</p>
    <a href="login.php">Logout</a>
</body>
</html>
