<?php
// config.php

// File paths
define('USERS_FILE', 'data/users.txt');
define('ROLES_FILE', 'data/roles.txt');

// Function to check if a user is an admin
function isAdmin($email) {
    // Load user data from the file
    $users = file(USERS_FILE);
    foreach ($users as $user) {
        list($storedEmail, $role) = explode(',', trim($user));
        if ($email === $storedEmail && $role === 'admin') {
            return true;
        }
    }
    return false;
}

// Function to redirect to a specific role's dashboard
function redirectToDashboard($role) {
    if ($role === 'admin') {
        header('Location: role_management.php');
    } else {
        header('Location: dashboard.php');
    }
}

// Start a session
session_start();
?>
