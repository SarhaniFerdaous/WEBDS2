<?php
require_once '../core/Database.php'; // Inclure le fichier de configuration de la base de données

// Vérifier si le motif (reason) est présent dans la requête POST
if (isset($_POST['report_reason'])) {
    $reportReason = $_POST['report_reason'];

    // Créer une nouvelle instance de la base de données
    $db = new Database();
    $conn = $db->getConnection();

    // Créer un rapport avec le motif fourni
    $stmt = $conn->prepare("INSERT INTO reports (reason) VALUES (:reason)");
    $stmt->bindParam(':reason', $reportReason, PDO::PARAM_STR);

    // Exécuter la requête
    if ($stmt->execute()) {
        // Rediriger l'utilisateur vers la page précédente
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit();
    } else {
        // En cas d'erreur lors de l'exécution de la requête
        echo "Erreur lors de l'ajout du rapport.";
    }
} else {
    // Si le motif (reason) est manquant dans la requête POST
    echo "Le motif du rapport est manquant.";
}
?>