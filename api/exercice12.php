<?php
class Personne {
    protected $nom;
    protected $age;

    public function __construct($nom, $age) {
        $this->nom = $nom;
        $this->age = $age;
    }

    public function afficher() {
        echo "<p><strong>Nom:</strong> $this->nom</p>";
        echo "<p><strong>Âge:</strong> $this->age ans</p>";
    }
}

class Etudiant extends Personne {
    private $note;

    public function __construct($nom, $age, $note) {
        parent::__construct($nom, $age);
        $this->note = $note;
    }

    public function afficher() {
        echo "<div class='card'>";
        echo "<h2>Étudiant 🎓</h2>";

        parent::afficher();

        echo "<p><strong>Note:</strong> $this->note</p>";
        echo "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Étudiant</title>

<style>
body {
    font-family: Arial, sans-serif;
    background: #eef2f7;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.card {
    background: #fff;
    padding: 25px;
    border-radius: 10px;
    width: 280px;
    text-align: center;
    box-shadow: 0 5px 12px rgba(0,0,0,0.1);
}

.card h2 {
    margin-bottom: 15px;
    color: #333;
}

.card p {
    margin: 6px 0;
    color: #555;
}
</style>
</head>

<body>

<?php
$et = new Etudiant("Ahmed", 20, 15);
$et->afficher();
?>

</body>
</html>
