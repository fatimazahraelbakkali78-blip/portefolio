<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$notes = [12, 14, 16, 18];
$somme = 0;
foreach ($notes as $note) {
 $somme += $note;
}
$moyenne = $somme / count($notes);
echo "Moyenne = " . $moyenne;
?> 
</body>
</html>