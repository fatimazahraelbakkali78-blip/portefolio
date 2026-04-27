<?php
class Employe {
    public function salaire() {
        echo "<p class='base'>Salaire de base</p>";
    }
}

class Manager extends Employe {
    public function salaire() {
        echo "<p class='manager'>Salaire élevé</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Employés</title>

<style>
body {
    font-family: Arial, sans-serif;
    background: #f5f7fa;
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 80px;
}

.card {
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    width: 220px;
    text-align: center;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

h2 {
    margin-bottom: 10px;
    color: #333;
}

.base {
    color: #555;
}

.manager {
    color: #007bff;
    font-weight: bold;
}
</style>
</head>

<body>

<div class="card">
    <h2>Employé</h2>
    <?php
    $e = new Employe();
    $e->salaire();
    ?>
</div>

<div class="card">
    <h2>Manager</h2>
    <?php
    $m = new Manager();
    $m->salaire();
    ?>
</div>

</body>
</html>
