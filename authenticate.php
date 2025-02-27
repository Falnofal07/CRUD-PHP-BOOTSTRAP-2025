<?php
session_start();
include('koneksi.php');

// Dummy credentials for authentication
$valid_username = 'admin';
$valid_password = 'password'; // In a real application, use hashed passwords

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['loggedin'] = true;
        header('Location: index.php'); // Redirect to the main page
        exit();
    } else {
        echo "<script>alert('Invalid username or password'); window.location.href='login.php';</script>";
    }
}
?>
