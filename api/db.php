<?php
$conn = new mysqli("localhost", "root", "", "boutique", 3307);
if ($conn->connect_error) {
    die("Erreur : " . $conn->connect_error);
}
?>