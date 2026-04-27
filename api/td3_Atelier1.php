<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$tab = [10, 20, 30, 40, 50];
$somme = 0;
foreach ($tab as $valeur) {
 $somme += $valeur;
}
echo "Somme = " . $somme;
?>
</body>
</html>