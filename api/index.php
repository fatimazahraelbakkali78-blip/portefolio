<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Fatima Zohra El Bakkali</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <style>
        :root {
            --accent: #e3ebf1;
            --accent-hover: #e3e6ed;
            --bg-dark: #c477b1;
            --card-bg: rgba(133, 47, 113, 0.7);
        }

        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: radial-gradient(circle at top right, #1e293b, #0f172a);
            color: #f8fafc;
            min-height: 100vh;
        }
body {
    background: linear-gradient(rgba(15, 23, 42, 0.5), rgba(15, 23, 42, 0.8)), 
                url('https://images.unsplash.com/photo-1518770660439-4636190af475?q=80&w=2070&auto=format&fit=crop') 
                center/cover no-repeat;
    display: flex;
    min-height: 100vh; /* bach t-ban tsswira 3la toul d-safha */
    margin: 0;
}
        /* HERO SECTION */
        .hero {
            position: relative;
            height: 50vh;
            background: linear-gradient(rgba(15, 23, 42, 0.5), rgba(15, 23, 42, 0.8)), 
                        url('https://fr.pngtree.com/free-backgrounds-photos/mat%C3%A9riel-informatique') center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            border-bottom: 2px solid rgba(196, 163, 93, 0.2);
        }

        .hero-content {
            text-align: center;
            z-index: 2;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin: 0;
            font-weight: 700;
            letter-spacing: -1px;
            background: linear-gradient(to right, #792776, #942157);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero p {
            font-size: 1.2rem;
            color: #94a3b8;
            margin-top: 10px;
        }

        /* CONTAINER & CARDS */
        .container {
            padding: 40px 20px;
            max-width: 800px;
            margin: -60px auto 0;
        }

        .card {
            background: var(--card-bg);
            backdrop-filter: blur(10px);
            padding: 25px;
            margin-bottom: 30px;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            border-color: var(--accent);
        }

        h2 {
            font-size: 1.4rem;
            color: var(--accent);
            margin-top: 0;
            border-left: 4px solid var(--accent);
            padding-left: 15px;
        }

        /* FORMS */
        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
        }

        label {
            font-size: 0.85rem;
            color: #94a3b8;
            margin-bottom: 5px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .input {
            padding: 12px;
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            background: rgba(15, 23, 42, 0.8);
            color: white;
            transition: 0.3s;
        }

        .input:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 4px rgba(56, 189, 248, 0.1);
        }

        /* BUTTONS */
        .btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 12px 24px;
            background: var(--accent);
            color: #0f172a;
            border-radius: 12px;
            font-weight: 600;
            transition: 0.3s;
            cursor: pointer;
            border: none;
            text-decoration: none;
            margin: 5px;
        }

        .btn:hover {
            background: var(--accent-hover);
            transform: scale(1.05);
        }

        .btn-secondary {
            background: rgba(148, 163, 184, 0.1);
            color: white;
            border: 1px solid rgba(148, 163, 184, 0.2);
        }

        .links {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
        }

        .link {
            padding: 5px 12px;
            background: rgba(56, 189, 248, 0.1);
            border-radius: 6px;
            color: var(--accent);
            font-weight: 500;
        }

        /* RESPONSIVE */
        @media(max-width: 768px){
            .hero h1 { font-size: 2.2rem; }
            .container { padding: 20px; }
        }
    </style>
</head>
<body>

<!-- HERO -->
<section class="hero">
    <div class="hero-content">
        <p>Projet Digital Development</p>
        <h1>Fatima Zohra El Bakkali</h1>
        <p><i class="fas fa-rocket"></i> Build • Learn • Deploy</p>
    </div>
</section>

<div class="container">
<?php
include_once 'Traitements.php';

$groupe = "Dev 101";
$plt = "Vercel";

echo "<div class='card'>";6
echo "<h2><i class='fas fa-laptop-code'></i> Premier site de $groupe sur $plt</h2>";
echo "</div>";

// Cours PHP
echo "<div class='card'>";
echo "<h2><i class='fab fa-php'></i> Cours PHP</h2>";
echo "<a href='/php.pptx' class='btn'><i class='fas fa-download'></i> Télécharger le cours</a>";
echo "</div>";

// Communication
echo "<div class='card'>";
echo "<h2><i class='fas fa-id-card'></i> Communication via formulaire :</h2>";
?>
<form method="POST" action="login.php">
    <div class="form-group">
        <label>Identifiant</label>
        <input type="text" name="log" class="input" placeholder="Entrez votre login" />
    </div>
    <div class="form-group">
        <label>Mot de passe</label>
        <input type="password" name="pass" class="input" placeholder="••••••••" />
    </div>
    <div class="form-actions">
        <button type="submit" name="action1" class="btn">Connexion</button>
        <button type="reset" class="btn btn-secondary">Réinitialiser</button>
    </div>
</form>
<?php
echo "</div>";

// Table
echo "<div class='card'>";
echo "<h2><i class='fas fa-table'></i> Appel Table</h2>";
?>
<form method="POST" action="index.php">
    <div class="form-group">
        <label>Nombre de lignes</label>
        <input type="number" name="rows" class="input" />
    </div>
    <div class="form-group">
        <label>Nombre de colonnes</label>
        <input type="number" name="cols" class="input" />
    </div>
    <button type="submit" name="action2" value="dessiner" class="btn">Générer la table</button>
</form>
<?php
if(!empty($_POST['action2'])){
    Table($_POST['rows'], $_POST['cols']);
}
echo "</div>";

// Triangle form
echo "<div class='card'>";
echo "<h2><i class='fas fa-shapes'></i> Appel Triangle via form</h2>";
?>
<form method="POST" action="index.php">
    <div class="form-group">
        <label>Nombre de lignes</label>
        <input type="number" name="rowst" class="input" />
    </div>
    <button type="submit" name="action3" value="dessiner" class="btn">Dessiner</button>
</form>
<?php
if(!empty($_POST['action3'])){
    Triangle($_POST['rowst']);
}
echo "</div>";

// Triangle liens
echo "<div class='card'>";
echo "<h2><i class='fas fa-link'></i> Liens Dynamiques (Triangle)</h2>";
echo "<div class='links'>";
for($i=3;$i<=10;$i++){
    echo "<a href='index.php?action4=$i' class='link'>$i</a>";
}
echo "</div>";
if(!empty($_GET['action4'])){
    Triangle($_GET['action4']);
}
echo "</div>";

// Ateliers Section (Compactée)
$ateliers = [
    1 => ['file' => 'At1.pdf', 'label' => 'Atelier 1'],
    2 => ['file' => 'At2.pdf', 'label' => 'Atelier 2', 'extra' => 'inscription.php'],
    3 => ['file' => 'At3.pdf', 'label' => 'Atelier 3', 'enn' => 'At3_enn.pdf'],
    4 => ['file' => 'Rapp4.pdf', 'label' => 'Atelier 4', 'enn' => 'At4.pdf'],
    5 => ['file' => 'Rapp5.pdf', 'label' => 'Atelier 5', 'enn' => 'At5.pdf'],
    6 => ['file' => '#', 'label' => 'Atelier 6', 'github' => true],
    7 => ['file' => 'Rapp7.pdf', 'label' => 'Atelier 7', 'enn' => 'At7.pdf'],
];

foreach ($ateliers as $id => $data) {
    echo "<div class='card'>";
    echo "<h2><i class='fas fa-folder-open'></i> {$data['label']}</h2>";
    echo "<a href='/{$data['file']}' class='btn'><i class='far fa-file-pdf'></i> Voir Rapport</a>";
    if(isset($data['enn'])) echo "<a href='/{$data['enn']}' class='btn btn-secondary'>Énoncé</a>";
    if(isset($data['extra'])) echo "<a href='{$data['extra']}' class='btn'>Inscription</a>";
    if(isset($data['github'])) echo "<a href='#' class='btn btn-secondary'><i class='fab fa-github'></i> Repo</a>";
    echo "</div>";
}

// Spéciaux
echo "<div class='card'>";
echo "<h2><i class='fas fa-shopping-basket'></i> Boutique E-fruit</h2>";
echo "<a href='https://efruits.vercel.app/acc.php' class='btn'>Accéder au Store</a>";
echo "</div>";

echo "<div class='card'>";
echo "<h2><i class='fas fa-database'></i> Base de Données</h2>";
echo "<a href='/ApplicationBDD.pptx' class='btn'><i class='fas fa-file-powerpoint'></i> Voir Présentation</a>";
echo "</div>";
echo "<div class='card'>";
echo "<h2><i class='fas fa-database'></i> Base de Données</h2>";
echo "<a href='https://github.com/fatimazahraelbakkali78-blip/My_store.git' class='btn'><i class='fas fa-file-powerpoint'></i> Voir Présentation</a>";
echo "</div>";
?>
</div>
</body>
</html>