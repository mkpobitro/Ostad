<?php

$data_file = "users.txt";
$new_data = "";

$email = $_POST['email'];
$role = $_POST['role'];

$users = file($data_file, FILE_IGNORE_NEW_LINES);

foreach ($users as $user) {
    list($uname, $uemail, $upassword, $urole) = explode(',', $user);
    if ($uemail == $email) {
        $new_data .= $uname . "," . $uemail . "," . $upassword . "," . $role . "\n";
    } else {
        $new_data .= $user . "\n";
    }
}

file_put_contents($data_file, $new_data);
header("Location: role_management.php");