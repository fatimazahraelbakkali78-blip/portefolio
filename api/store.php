<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user'])) header("Location: index.php");

if (isset($_POST['ajouter'])) {
    $_SESSION['panier'][] = $_POST['article_nom'];
}

$articles = $conn->query("SELECT * FROM articles");
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial; padding: 20px; }
        .item { border-bottom: 1px solid #eee; padding: 10px; display: flex; justify-content: space-between; width: 400px; }
        button { background: #28a745; color: white; border: none; padding: 5px; cursor: pointer; }
    </style>
</head>
<body>
    <h2>Store | User: <?php echo $_SESSION['user']; ?></h2>
    <a href="panier.php">Voir mon Panier (<?php echo count($_SESSION['panier']); ?>)</a>
    <hr>
    <?php while($row = $articles->fetch_assoc()): ?>
        <div class="item">
            <span><?php echo $row['nom']; ?> - <?php echo $row['prix']; ?> DH</span>
            <form method="POST">
                <input type="hidden" name="article_nom" value="<?php echo $row['nom']; ?>">
                <button type="submit" name="ajouter">Ajouter</button>
            </form>
        </div>
    <?php endwhile; ?>
</body>
</html>