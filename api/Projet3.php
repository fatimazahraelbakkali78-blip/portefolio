<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_POST['envoyer'])) {
    // Récupération des données
    $num_inscription = $_POST['num_inscription'];
    $nom_prenom = $_POST['nom_prenom'];
    $ville = $_POST['ville'];
    $annee_naissance = $_POST['annee_naissance'];
    $sexe = $_POST['sexe'];
    $loisirs = implode(', ', $_POST['loisirs']);
    $infos_complementaires = $_POST['infos_complementaires'];

    // Affichage du récapitulatif
    echo '<h2>Récapitulatif des informations</h2>';
    echo '<table border="1">';
    echo '<tr><td>Numéro d\'inscription</td><td>' . $num_inscription . '</td></tr>';
    echo '<tr><td>Nom et prénom</td><td>' . $nom_prenom . '</td></tr>';
    echo '<tr><td>Ville</td><td>' . $ville . '</td></tr>';
    echo '<tr><td>Année de naissance</td><td>' . $annee_naissance . '</td></tr>';
    echo '<tr><td>Sexe</td><td>' . $sexe . '</td></tr>';
    echo '<tr><td>Loisirs</td><td>' . $loisirs . '</td></tr>';
    echo '<tr><td>Informations complémentaires</td><td>' . $infos_complementaires . '</td></tr>';
    echo '</table>';
}
?>

<form method="post" action="">
    <label>Numéro d'inscription :</label><br>
    <input type="text" name="num_inscription"><br>

    <label>Nom et prénom :</label><br>
    <input type="text" name="nom_prenom"><br>

    <label>Ville :</label><br>
    <input type="text" name="ville"><br>

    <label>Année de naissance :</label><br>
    <input type="number" name="annee_naissance"><br>

    <label>Sexe :</label><br>
    <select name="sexe">
        <option value="Homme">Homme</option>
        <option value="Femme">Femme</option>
    </select><br>

    <label>Loisirs :</label><br>
    <input type="checkbox" name="loisirs[]" value="Sport"> Sport<br>
    <input type="checkbox" name="loisirs[]" value="Musique"> Musique<br>
    <input type="checkbox" name="loisirs[]" value="Lecture"> Lecture<br>

    <label>Informations complémentaires :</label><br>
    <textarea name="infos_complementaires"></textarea><br>

    <input type="submit" name="envoyer" value="Envoyer">
</form>
</body>
</html>