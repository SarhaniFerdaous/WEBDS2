<?php
require_once '../core/Database.php'; // Inclure le fichier de configuration de la base de données

// Vérifier si l'ID de l'article est défini dans la requête POST
if (isset($_POST['article_id'])) {
    $articleId = $_POST['article_id'];

    // Créer une nouvelle instance de la base de données
    $db = new Database();
    $conn = $db->getConnection();

    // Préparer la requête pour mettre à jour le nombre de likes
    $stmt = $conn->prepare("UPDATE articles SET likes = likes + 1 WHERE id = :article_id");
    $stmt->bindParam(':article_id', $articleId, PDO::PARAM_INT);

    // Exécuter la requête
    if ($stmt->execute()) {
        // Rediriger l'utilisateur vers la page précédente
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit();
    } else {
        // En cas d'erreur lors de l'exécution de la requête
        echo "Erreur lors de l'ajout du like.";
    }
} else {
    // Si l'ID de l'article n'est pas défini dans la requête POST
    echo "ID de l'article non spécifié.";
}
?>