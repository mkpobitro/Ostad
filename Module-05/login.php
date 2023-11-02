<?php include_once './templates/header.php'; ?>
<?php
if (isset($_SESSION['user_id'])) {
    header('location: index.php');
}

$data_file = "users.txt";

$errMsg = '';

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$users = file($data_file, FILE_IGNORE_NEW_LINES);

if (isset($_POST['submit'])) {
    foreach ($users as $user) {
        list($uname, $uemail, $upassword, $urole) = explode(',', $user);
        if ($uemail == $email && $upassword == $password) {
            $_SESSION['username'] = $uname;
            $_SESSION['email'] = $uemail;
            $_SESSION['role'] = $urole;

            // Redirect based on role
            if ($urole == "admin") {
                header("Location: admin_dashboard.php");
                exit;
            } elseif ($urole == "manager") {
                header("Location: manager_dashboard.php");
                exit;
            } elseif ($urole == "user") {
                header("Location: user_dashboard.php");
                exit;
            }
        } else {
            $errMsg = "Invalid credentials!";
        }
    }
}

?>
<div class="container py-3">
    <div class="row">
        <div class="col-md-12">
            <form action="login.php" method="post">
                Email: <input type="email" name="email" required><br>
                Password: <input type="password" name="password" required><br>
                <input type="submit" name="submit" value="Login">
            </form>
            <p class="text-danger">
                <?php echo $errMsg; ?>
            </p>

        </div>
    </div>
</div>


<?php include_once './templates/footer.php'; ?>