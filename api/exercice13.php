<?php
class Etudiant {
    private $nom;
    private $note;

    public function __construct($nom, $note) {
        $this->nom = $nom;
        $this->note = $note;
    }

    public function afficher() {
        echo "<div class='card'>
                <p><strong>Nom:</strong> $this->nom</p>
                <p><strong>Note:</strong> $this->note</p>
              </div>";
    }

    public function getNote() {
        return $this->note;
    }
}

// Création des objets
$e1 = new Etudiant("Ali", 12);
$e2 = new Etudiant("Sara", 8);
$e3 = new Etudiant("Youssef", 15);
$e4 = new Etudiant("Lina", 9);

// Tableau
$etudiants = [$e1, $e2, $e3, $e4];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Étudiants</title>

<style>
body {
    font-family: Arial, sans-serif;
    background: #f4f6f9;
    margin: 20px;
}

h2 {
    color: #333;
}

.container {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
}

.card {
    background: #fff;
    padding: 15px;
    border-radius: 10px;
    width: 180px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.admis {
    border-left: 5px solid green;
}

</style>
</head>

<body>

<h2>Tous les étudiants</h2>
<div class="container">
<?php
foreach ($etudiants as $etudiant) {
    $etudiant->afficher();
}
?>
</div>

<h2>Étudiants admis (note ≥ 10)</h2>
<div class="container">
<?php
foreach ($etudiants as $etudiant) {
    if ($etudiant->getNote() >= 10) {
        echo "<div class='admis'>";
        $etudiant->afficher();
        echo "</div>";
    }
}
?>
</div>

</body>
</html>
