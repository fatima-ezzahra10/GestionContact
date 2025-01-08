<?php

include 'connexion.php';

// Vérifiez ID est passé dans l'URL
if (isset($_GET['ref'])) {
    $ref = intval($_GET['ref']); // Sécurisation
//Récupérer les informations 
    $result = $conn->query("SELECT * FROM etudiants WHERE ref = $ref");


if ($result->num_rows > 0) {
    $etudiant = $result->fetch_assoc();
} else {
    die("Étudiant introuvable.");
}
} else {
    die("Ref non spécifié.");
}


//modification
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$ref=$_POST["ref"]; 
$code=$_POST["code"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$filiere=$_POST["filiere"];


$sql = mysqli_query($conn , "UPDATE etudiants SET ref='$ref' , code='$code' , nom='$nom' , prenom='$prenom' , filiere='$filiere' WHERE ref='$ref' ");

if($sql){
    echo '<script>alert("Modification effectuée.");window.location.href="index.php";</script>';
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
    <title>Modifier un étudiant</title>
</head>
<body>
    <h1>Modifier un étudiant</h1>
    <form method="POST">
        <label>Ref: <input type="text" name="ref" value="<?= ($etudiant['ref']) ?>" required></label><br>
        <label>Code: <input type="text" name="code" value="<?= $etudiant['code'] ?>" required></label><br>
        <label>Nom: <input type="text" name="nom" value="<?= ($etudiant['nom']) ?>" required></label><br>
        <label>Prénom: <input type="text" name="prenom" value="<?= ($etudiant['prenom']) ?>" required></label><br>
        <label>Filière: <input type="text" name="filiere" value="<?= ($etudiant['filiere']) ?>" required></label><br>
        <button type="submit">Enregistrer</button>
    </form>
</body>
</html>
