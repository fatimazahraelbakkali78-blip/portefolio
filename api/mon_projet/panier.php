<?php
session_start();
if (!isset($_SESSION['user'])) header("Location: index.php");
?>
<!DOCTYPE html>
<html>
<head><style>body { font-family: Arial; padding: 20px; }</style></head>
<body>
    <h2>Mon Panier</h2>
    <ul>
        <?php 
        if (empty($_SESSION['panier'])) echo "L-panier khawi!";
        else foreach ($_SESSION['panier'] as $item) echo "<li>$item</li>";
        ?>
    </ul>
    <br>
    <a href="store.php">Rje3 l-Store</a> | <a href="index.php">Déconnexion</a>
</body>
</html>