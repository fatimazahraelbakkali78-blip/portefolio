<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        body { font-family: Arial; display: flex; justify-content: center; margin-top: 50px; }
        form { border: 1px solid #ccc; padding: 20px; border-radius: 8px; }
        input { display: block; width: 100%; margin: 10px 0; padding: 8px; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background: #007bff; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <nav>
    <a href="/store.php">store</a> | 
    <a href="/panier.php">panier</a> | 
    <a href="/db.php">Déconnexion</a>
    <a href="/check.php">Déconnexion</a>
</nav>
    <form action="check.php" method="POST">
        <h2>Login</h2>
        <input type="text" name="username" placeholder="Nom d'utilisateur" required>
        <input type="password" name="password" placeholder="Mot de passe" required>
        <button type="submit">Se connecter</button>
    </form>
</body>
</html>