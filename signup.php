<?php
// Dummy data for demonstration purposes
$users = [
    'john' => 'password123',
    'jane' => 'pass123'
];

$username = $_POST['username'];
$password = $_POST['password'];

if (isset($users[$username])) {
    echo "Username already exists. Please choose a different username.";
} else {
    // Save the new user
    $users[$username] = $password;
    echo "Signup successful. Welcome, $username!";
}
?>
