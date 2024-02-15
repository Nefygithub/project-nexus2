<?php
session_start();

$users = [
    'john' => 'password123',
    'jane' => 'pass123'
];

$username = $_POST['username'];
$password = $_POST['password'];

if (isset($users[$username]) && $users[$username] === $password) {
    $_SESSION['username'] = $username;
    echo "Login successful. Welcome, $username!";
} else {
    echo "Login failed. Please check your username and password.";
}
?>
