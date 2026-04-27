<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="container">
    <h2>Inscription Étudiant</h2>

    <form action="exercice6.php" method="POST" enctype="multipart/form-data">


 <div class="form-group">
            <label>Photo</label>
            <input type="file" name="photo" required>
        </div>


        <div class="form-group">
            <label>Numéro d'inscription</label>
            <input type="text" name="numero" required>
        </div>

        <div class="row">
            <div class="form-group">
                <label>Nom</label>
                <input type="text" name="nom" required>
            </div>

            <div class="form-group">
                <label>Prénom</label>
                <input type="text" name="prenom" required>
            </div>
        </div>

        <div class="form-group">
            <label>Ville</label>
            <input type="text" name="ville">
        </div>

        <div class="form-group">
            <label>Date de naissance</label>
            <input type="date" name="date_naissance">
        </div>

        <div class="form-group">
            <label>Sexe</label>
            <div class="radio-group">
                <label><input type="radio" name="sexe" value="Homme"> Homme</label>
                <label><input type="radio" name="sexe" value="Femme"> Femme</label>
            </div>
        </div>

        <div class="form-group">
            <label>Loisirs</label>
            <select name="loisirs">
                <option value="Sport">Sport</option>
                <option value="Lecture">Lecture</option>
                <option value="Musique">Musique</option>
                <option value="Voyage">Voyage</option>
            </select>
        </div>
<div class="form-group">
            <label>Loisirs 2</label>
            
                <input  name="loi[]" type="checkbox" value="Sport"/>Sport
                <input  name="loi[]" type="checkbox" value="Lecture"/>Lecture
                <input  name="loi[]" type="checkbox" value="musique"/>Music
                <input  name="loi[]" type="checkbox" value="Voyage"/>Travelling
                
        </div>
        <div class="form-group">
            <label>Informations complémentaires</label>
            <textarea name="infos" rows="3"></textarea>
        </div>

        <input  name="action_inscription" value="S'inscrire"  type="submit" />

    </form>






<?php 


include_once 'resultat2.php';


// action inscription 

if(!empty($_POST['action_inscription']))
    {

$num=$_POST['numero'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$ville=$_POST['ville'];
$dn=$_POST['date_naissance'];
$sexe=$_POST['sexe'];
$loisirs=$_POST['loisirs'];
$loisirs2=$_POST['loi'];
$infos=$_POST['infos'];


$temp_file=$_FILES['photo']['tmp_name'];

$nomf=$_FILES['photo']['name'];

$destination="images/".$nomf;

displayinfosintohtmltable($num,$nom,$prenom,$ville,$dn,$sexe,$loisirs,$loisirs2,$infos,$temp_file,$destination);

    }


?>



</div>
</body>
</html>