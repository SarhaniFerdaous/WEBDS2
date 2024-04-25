<?php
require_once '../core/Database.php'; // Inclure le fichier de configuration de la base de données

// Vérifier si le texte du commentaire est présent dans la requête POST
if (isset($_POST['comment_text'])) {
    $commentText = $_POST['comment_text'];

    // Créer une nouvelle instance de la base de données
    $db = new Database();
    $conn = $db->getConnection();

    // Créer un commentaire avec le texte fourni
    $stmt = $conn->prepare("INSERT INTO comments (comment_text) VALUES (:comment_text)");
    $stmt->bindParam(':comment_text', $commentText, PDO::PARAM_STR);

    // Exécuter la requête
    if ($stmt->execute()) {
        // Rediriger l'utilisateur vers la page précédente
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit();
    } else {
        // En cas d'erreur lors de l'exécution de la requête
        echo "Erreur lors de l'ajout du commentaire.";
    }
} else {
    // Si le texte du commentaire est manquant dans la requête POST
    echo "Le texte du commentaire est manquant.";
}
?>