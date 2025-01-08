<?php
include 'connexion.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $sql = "SELECT * FROM etudiants WHERE id = $id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
    $etudiant = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($etudiant) {
        echo "<h1>Détails de l'étudiant</h1>";
        echo "<p>Nom : " . htmlspecialchars($etudiant['nom']) . "</p>";
        echo "<p>Prénom : " . htmlspecialchars($etudiant['prenom']) . "</p>";
        echo "<p>Email : " . htmlspecialchars($etudiant['email']) . "</p>";
        echo "<p>Âge : " . htmlspecialchars($etudiant['age']) . "</p>";
    } else {
        echo "Étudiant introuvable.";
    }
} else {
    echo "Aucun ID spécifié.";
}
?>
