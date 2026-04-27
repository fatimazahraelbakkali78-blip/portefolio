<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$etudiant = [
 "nom" => "Ali",
 "age" => 20,
 "note" => 15
];
foreach ($etudiant as $cle => $valeur) {
 echo $cle . " : " . $valeur . "<br>";
}
?>
</body>
</html>