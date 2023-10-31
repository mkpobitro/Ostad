<?php
// login.php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate user credentials from the file
    $users = file(USERS_FILE);
    foreach ($users as $user) {
        list($storedEmail, $storedPassword) = explode(',', trim($user));
        if ($email === $storedEmail && password_verify($password, $storedPassword)) {
            $_SESSION['email'] = $email;
            $role = isAdmin($email) ? 'admin' : 'user';
            redirectToDashboard($role);
            exit();
        }
    }

    // Authentication failed, show an error message
}

// HTML form for user login
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="post">
        Email: <input type="email" name="email" required><br>
        Password: <input type="password" name="password" required><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
