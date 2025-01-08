<?php

include 'connexion.php';

if(isset($_GET["ref"])) {
$ref=$_GET["ref"];

$delete ="DELETE FROM etudiants WHERE ref='$ref' ";

$query= mysqli_query($conn, $delete);


if($query){

    echo '<script>alert("La suppression a réussi");window.location.href="index.php";</script>';
} else {
    echo '<script>alert("Erreur lors de la suppression.")</script>';
}
} else {
    echo '<script>alert("Aucun ref spécifié.")</script>';
}

?>