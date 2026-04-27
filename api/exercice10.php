<?php
class Voiture {
    protected $marque;
    protected $modele;

    public function __construct($marque, $modele) {
        $this->marque = $marque;
        $this->modele = $modele;
    }

    public function afficher() {
        echo "<p><strong>Marque:</strong> $this->marque</p>";
        echo "<p><strong>Modèle:</strong> $this->modele</p>";
    }
}

class VoitureSport extends Voiture {
    private $vitesseMax;

    public function __construct($marque, $modele, $vitesseMax) {
        parent::__construct($marque, $modele);
        $this->vitesseMax = $vitesseMax;
    }

    public function afficher() {
        echo "<div class='card'>";
        echo "<h2>Voiture Sport 🚗</h2>";
        
        parent::afficher();
        
        echo "<p><strong>Vitesse Max:</strong> $this->vitesseMax km/h</p>";
        echo "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Voiture Sport</title>

<style>
body {
    font-family: Arial, sans-serif;
    background: #eef2f3;
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
    box-shadow: 0 5px 12px rgba(0,0,0,0.1);
    width: 280px;
    text-align: center;
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
$v = new VoitureSport("BMW", "M3", 250);
$v->afficher();
?>

</body>
</html>
