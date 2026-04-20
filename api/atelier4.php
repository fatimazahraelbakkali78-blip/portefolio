<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface Pro Dark</title>
    <style>
        :root {
            --bg-dark: #121212;
            --card-bg: #1e1e1e;
            --primary: #6366f1;
            --text-gray: #b3b3b3;
            --accent-green: #064e3b;
            --text-green: #10b981;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: var(--bg-dark);
            color: white;
            margin: 0;
            padding: 50px 20px;
            display: flex;
            flex-direction: row; 
            justify-content: center;
            align-items: flex-start;
            gap: 30px;
            min-height: 100vh;
        }

        .container {
            background: var(--card-bg);
            padding: 40px;
            border-radius: 20px;
            width: 450px;
            min-height: 600px; 
            box-shadow: 0 15px 35px rgba(0,0,0,0.5);
        }

        h2 {
            color: var(--primary);
            font-size: 1.5rem;
            margin-bottom: 30px;
        }

        .links-grid {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 12px;
            margin-bottom: 30px;
        }

        .links-grid a {
            text-decoration: none;
            background: #2d2d2d;
            color: white;
            padding: 12px 5px;
            border-radius: 10px;
            text-align: center;
            font-weight: bold;
            font-size: 0.9rem;
            transition: 0.3s;
        }

        .links-grid a:hover {
            background: var(--primary);
            transform: scale(1.1);
        }

        .result-display {
            background: rgba(16, 185, 129, 0.1);
            border: 1px solid var(--accent-green);
            padding: 20px;
            border-radius: 12px;
            color: var(--text-green);
            font-size: 1.1rem;
        }

        .form-group {
            margin-bottom: 25px;
        }

        label {
            display: block;
            color: white;
            margin-bottom: 10px;
            font-weight: 500;
        }

        input[type="text"] {
            width: 100%;
            background: #2d2d2d;
            border: 1px solid #444;
            padding: 15px;
            border-radius: 10px;
            color: white;
            outline: none;
        }

        .btn-submit {
            width: 100%;
            background: var(--primary);
            color: white;
            border: none;
            padding: 15px;
            border-radius: 12px;
            font-weight: bold;
            font-size: 1rem;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-submit:hover {
            background: #4f46e5;
            box-shadow: 0 0 15px rgba(99, 102, 241, 0.4);
        }

        @media (max-width: 950px) {
            body { flex-direction: column; align-items: center; }
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Sélectionner une valeur</h2>
        <div class="links-grid">
            <?php 
            for ($i = 5; $i <= 100; $i += 5) { 
                echo "<a href='?val=$i'>$i</a>"; 
            } 
            ?>
        </div>

        <?php if (isset($_GET["val"])): ?>
            <div class="result-display">
                Vous avez choisi : <strong><?php echo htmlspecialchars($_GET["val"]); ?></strong>
            </div>
        <?php else: ?>
            <div class="result-display" style="border-color: #444; color: #666;">
                Aucune valeur choisie
            </div>
        <?php endif; ?>
    </div>

    <div class="container">
        <h2>Formulaire d'inscription</h2>
        <form method="POST" action=""> 
            <div class="form-group">
                <label>Nom</label>
                <input type="text" name="nom" placeholder="Votre nom">
            </div>
            <div class="form-group">
                <label>Prénom</label>
                <input type="text" name="prenom" placeholder="Votre prénom"> 
            </div>
            <button type="submit" name="valider" class="btn-submit">Valider</button>
        </form>

        <?php 
        if (isset($_POST["valider"])) {
            $nom = htmlspecialchars($_POST["nom"]); 
            $prenom = htmlspecialchars($_POST["prenom"]); 
            if (!empty($nom) && !empty($prenom)) {
                echo "<div class='result-display' style='margin-top:20px;'>";
                echo "Bienvenue <strong>$nom $prenom</strong>";
                echo "</div>";
            }
        }
        ?> 
    </div>

</body>
</html>