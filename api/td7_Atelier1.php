<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$tab = [30, 10, 50, 20];
sort($tab);
echo "Croissant : ";
print_r($tab);
rsort($tab);
echo "<br>Décroissant : ";
print_r($tab);
?>
</body>
</html>