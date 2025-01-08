<?php

include 'connexion.php';
include 'haut.php';

$sql = "SELECT * FROM etudiants";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des étudiants</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        h1{
            text-align: center;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
        .main-header{
            background-color:rgb(132, 0, 255);
            color: #fff;
            padding: 20px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        .main-header .container{
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .search-form{
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .search-form input {
            padding: 8px;
            border: none;
            border-radius: 4px;
            outline: none;
        }
        .search-form button {
            padding: 8px 15px;
            background-color: rgb(89, 29, 144);
            border: none;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .search-form button:hover {
            background-color:  rgb(65, 1, 124);
        }
        .add-button {
            display: block;
            width: 150px;
            text-align: center;
            margin: 20px auto;
            padding: 10px 15px;
            background-color: #28a745;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .add-button:hover {
            background-color: #218838;
        }



    </style>
</head>
<body>
    <h1>Liste des étudiants</h1>
        <a href="ajouter.php" class="add-button">Ajouter</a>
        <tbody>
        <?php if ($result->num_rows > 0){

        echo"
            <table>
                <tr>
                <th>Ref</th>
                <th>Code</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Filiére</th>
                <th>Modification</th>
                <th>Suppression</th>
                </tr>
            ";

            while ($row = $result->fetch_assoc()){
            echo"<tr>";
                echo" <td>" . $row['ref'] . "</td>";
                echo" <td>" . $row['code'] . "</td>";
                echo" <td>" . $row['nom'] . "</td>";
                echo" <td>" . $row['prenom'] . "</td>";
                echo" <td>" . $row['filiere'] . "</td>";
                echo "<td><a href='modifier.php?ref=" . $row['ref'] . "'>Modifier</a></td>";
                echo "<td><a href='supprimer.php?ref=" . $row['ref'] . "' onclick='return confirm(\"Voulez-vous vraiment supprimer cet étudiant ?\")'>Supprimer</a></td>";
            echo"</tr>";
            }
            
        echo "</table>";
        } else {
            echo "<p>Aucun étudiant trouvé.</p>";
        }     
            ?>
                
        </tbody>
    </table>
</body>
</html>