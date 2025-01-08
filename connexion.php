<?php

$localhost="localhost";
$username="root";
$password="";
$dbname="etudiants_db";


//connexion 
$conn = new mysqli($localhost,$username,$password,$dbname,3307);


//verif connexion
if ($conn->connect_error){
    die("Connection failed : ". $conn->connect_error);
}

?>