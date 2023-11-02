<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    App
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="index.php" class="nav-link px-2 text-secondary">Home</a></li>
                    <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') { ?>
                        <li><a href="admin_dashboard.php" class="nav-link px-2 text-white">Dashboard</a></li>
                    <?php } elseif (isset($_SESSION['role']) && $_SESSION['role'] == 'manager') { ?>
                        <li><a href="manager_dashboard.php" class="nav-link px-2 text-white">Dashboard</a></li>
                    <?php } elseif (isset($_SESSION['role']) && $_SESSION['role'] == 'user') { ?>
                        <li><a href="user_dashboard.php" class="nav-link px-2 text-white">Dashboard</a></li>
                    <?php } ?>
                </ul>

                <div class="text-end">
                    <?php if (!isset($_SESSION['username'])) { ?>
                        <a href="login.php" type="button" class="btn btn-outline-light me-2">Login</a>
                        <a href="register.php" type="button" class="btn btn-warning">Sign-up</a>
                    <?php } ?>
                    <?php if (isset($_SESSION['username'])) { ?>
                        <a href="logout.php" type="button" class="btn btn-warning">Logout</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </header>