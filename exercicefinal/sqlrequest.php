<?php 
//initialisation des données en DB, NE PAS SUPPRIMER
// + Création de la connexion
require_once("initializer.php");
try{
  $pdo = new PDO('sqlite:data.sqlite');
  initDB($pdo);

  $sql = "SELECT content FROM topics";

  //Préparation de la requête au moyen de prepare() et récupération de l'objet PDOStatement
  $stmt = $pdo->prepare($sql);

  //Exécution de la requête et passage des paramètres
  $stmt->execute();

  //Récupération de tous les résultats au moyen de fetchAll()
  $results = $stmt->fetchAll();

  //Création d'une table HTML avec ligne d'en-tête
  $output = "<table>";
  $output .="<tr><th>CONTENU</th></tr>";

  //Itération sur l'ensemble des résultats issus de la requête
  foreach($results as $result){
    //Récupération des données de la ligne $result
    $content = $result["content"];

    //Concaténation des données dans la table HTML
    $output .="<tr>";
    $output .="<td>$content</td>";
    $output .="<tr>";
  }

  //Fermeture de la table HTML
  $output .= "</table>"; 

  //Affichage du resultat
  echo $output;
}catch(PDOException $e){
 echo $e->getMessage();
}
?>