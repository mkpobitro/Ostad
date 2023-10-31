<?php
// dashboard.php
require_once 'config.php';

if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit();
}

$email = $_SESSION['email'];
$role = isAdmin($email) ? 'admin' : 'user';
?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $role ?> Dashboard</title>
</head>
<body>
    <h1><?= $role ?> Dashboard</h1>
    <p>Welcome, <?= $email ?>!</p>
    <a href="login.php">Logout</a>
</body>
</html>
