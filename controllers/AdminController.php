<?php
require_once '../models/User.php';
require_once '../models/Article.php';
require_once '../core/Controller.php';


class AdminController extends Controller {
    public function listArticles() {
        // Initialisez un tableau vide pour stocker les articles
        $articles = [];
    
        // Connexion à la base de données (vous devez remplacer 'localhost', 'utilisateur', 'mot_de_passe' et 'nom_de_la_base' par vos propres informations de connexion)
        $db = new PDO('mysql:host=localhost;dbname=palestine', 'root', '');
    
        // Préparez et exécutez la requête SQL pour sélectionner tous les articles de la table des articles
        $stmt = $db->query("SELECT * FROM articles");
    
        // Parcourez les résultats de la requête et ajoutez chaque article au tableau $articles
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $articles[] = $row;
        }
    
        // Retournez le tableau des articles
        return $articles;
    }
    


    public function listUsers() {
        $user = $this->model('User');
        return $user->getAll();
    }

    public function deleteArticle($id) {
        // Connexion à la base de données (remplacez les informations de connexion par les vôtres)
        $db = new PDO('mysql:host=localhost;dbname=palestine', 'root', '');
    
        // Préparez et exécutez la requête SQL DELETE pour supprimer l'article avec l'ID spécifié
        $stmt = $db->prepare("DELETE FROM articles WHERE id = ?");
        $stmt->execute([$id]);
    
        // Retournez true si la suppression s'est bien passée, false sinon
        return $stmt->rowCount() > 0;
    }
    

    public function deleteUser($id) {
        $user = $this->model('User');
        $user->delete($id);
    }

    public function isAdmin() {
        if (isset($_SESSION['user_id'])) {
            $user = $this->model('User');
            $user = $user->getUserById($_SESSION['user_id']);
            if ($user['is_admin'] == 1) {
                return true;
            }
            return false;
        }
    }
}
?>