<?php
require_once("initializer.php");
if (isset($_GET['id'])) {
    $id_sujet = $_GET['id'];

    try {
        $pdo = new PDO('sqlite:data.sqlite');
        initDB($pdo);

        // Requête pour récupérer les détails du sujet à partir de l'ID
        $stmt = $pdo->prepare("SELECT content FROM topics WHERE id = :id");
        $stmt->bindParam(':id', $id_sujet, PDO::PARAM_INT);
        $stmt->execute();
        $sujet = $stmt->fetch();
        if ($sujet) {
            // Affichage des détails du sujet
            echo "<p>" . nl2br(htmlspecialchars($sujet['content'])) . "</p>";
        } else {
            echo "<p>Sujet non trouvé.</p>";
        }
    } catch (PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
    }
} else {
    echo "<p>ID du sujet manquant.</p>";
}
?>
<!DOCTYPE html>
<html lang="fr">
  <meta name="viewport" content= "width=device-width, initial-scale=1.0">
  <head>
  <style>
    .deconnexion {
      position: fixed;
      top: 10px;
      right: 10px;
      font-size: 16px;
      background-color: #f2f2f2;
      padding: 10px 15px;
      border-radius: 5px;
    }
  </style>  
  </head>
  <body>
    <!-- Lien pour se déconnecter -->
    <a href ="logout.php" class="deconnexion">Déconnexion</a>
      <br>
      <br>
      <br>
      <br>
      <br>
      <!-- lien pour retourner à la liste des sujets -->
    <a href="topics.php">Retour à la liste des topics</a>
  </body>
</html>

