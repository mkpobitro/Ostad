<?php
$data_file = "users.txt";

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$new_user_data = $username . "," . $email . "," . $password . ",user\n"; // default role is 'user'

file_put_contents($data_file, $new_user_data, FILE_APPEND);
header("Location: login.php");
