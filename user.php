<?php session_start();
if (!$_SESSION['user']) {
    header('Location: login.php');
}
?>
<h1>123</h1>