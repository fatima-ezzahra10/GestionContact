<?php
include 'connexion.php';


//l'ajout
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$ref=$_POST["ref"]; 
$code=$_POST["code"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$filiere=$_POST["filiere"];

$sql = mysqli_query($conn, "INSERT INTO etudiants (ref, code, nom, prenom, filiere) VALUES ('$ref', '$code', '$nom', '$prenom', '$filiere')");

if($sql){
    echo'<script>alert("Étudiant ajouté avec succès."); window.location.href="index.php";</script>';

} else {
    echo "Erreur : " . $conn->error;
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un étudiant</title>
</head>
<body>
    <h1>Ajouter un étudiant</h1>
    <form method="POST">
        <label>Ref: <input type="text" name="ref" required></label><br>
        <label>Code: <input type="text" name="code" required></label><br>
        <label>Nom: <input type="text" name="nom" required></label><br>
        <label>Prénom: <input type="text" name="prenom" required></label><br>
        <label>Filière: <input type="text" name="filiere" required></label><br>
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>