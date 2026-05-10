<?php
session_start();
include 'db.php';

$user = $_POST['username'];
$pass = $_POST['password'];

$res = $conn->query("SELECT * FROM utilisateurs WHERE username='$user' AND password='$pass'");

if ($res->num_rows > 0) {
    $_SESSION['user'] = $user;
    $_SESSION['panier'] = [];
    header("Location: store.php");
} else {
    echo "Login ghalat! <a href='index.php'>Rje3</a>";
}
?>