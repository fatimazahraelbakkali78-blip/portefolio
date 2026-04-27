<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$etudiants = [
 ["nom" => "Ali", "note" => 14],
 ["nom" => "Sara", "note" => 16],
 ["nom" => "Yassine", "note" => 12]
];
foreach ($etudiants as $etudiant) {
 echo $etudiant["nom"] . " : " . $etudiant["note"] . "<br>";
}
?>
</body>
</html>