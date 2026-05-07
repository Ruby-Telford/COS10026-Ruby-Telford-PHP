<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

$pageTitle = "Welcome Page";
include("header.inc");
?>

<main>
    <h2>Welcome</h2>

    <p>Hello, <?php echo $_SESSION['user']; ?>!</p>
    <p>You have successfully logged in.</p>
    <p>Your hidden token is: <?php echo $_SESSION['token']; ?></p>
</main>

<?php
include("footer.inc");
?>