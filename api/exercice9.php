<?php
class Voiture {

    public static function message() {
        echo "<div class='message-box'>
                <h1>🚗 Bienvenue</h1>
                <p>Bienvenue dans le garage</p>
              </div>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Garage</title>

<style>
body {
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg, #4facfe, #00f2fe);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.message-box {
    background: white;
    padding: 30px;
    border-radius: 12px;
    text-align: center;
    box-shadow: 0 6px 15px rgba(0,0,0,0.2);
    width: 300px;
}

.message-box h1 {
    margin-bottom: 10px;
    color: #333;
}

.message-box p {
    color: #555;
    font-size: 16px;
}
</style>
</head>

<body>

<?php
Voiture::message();
?>

</body>
</html>
