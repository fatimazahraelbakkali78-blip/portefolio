<?php
class Voiture {
    private $marque;
    private $modele;

    public function __construct($marque, $modele) {
        $this->marque = $marque;
        $this->modele = $modele;
    }

    public function afficher() {
        echo "<div class='card'>
                <h2>Voiture</h2>
                <p><strong>Marque:</strong> $this->marque</p>
                <p><strong>Modèle:</strong> $this->modele</p>
              </div>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Voiture</title>

<style>
body {
    font-family: Arial, sans-serif;
    background: #f4f4f4;
    display: flex;
    justify-content: center;
    margin-top: 50px;
}

.card {
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    width: 250px;
    text-align: center;
}

.card h2 {
    margin-bottom: 10px;
    color: #333;
}

.card p {
    margin: 5px 0;
    color: #555;
}
</style>
</head>

<body>

<?php
$v1 = new Voiture("Toyota", "Corolla");
$v1->afficher();
?>

</body>
</html>
