<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$token = $_POST['token'];

if ($username == 'admin' && $password == 'password123') {
    $_SESSION['user'] = $username;
    $_SESSION['token'] = $token;

    header('Location: welcome.php');
    exit();
} else {
    echo "Invalid login. <a href='login.php'>Try again</a>";
}
?>