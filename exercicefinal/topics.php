<?php
require_once("listingtopics.php");
//Define class "Topic"
class Topics{
  public $title;
  public $author;
  public $creation_date;
  public $content;
  public $id;
  
//Adding a constructor with partialy optionnal parameters
  public function __construct($title, $author,$creation_date,$content ="",$id=""){
    $this->title = $title;  
    $this->author = $author;
    $this->creation_date = $creation_date;
    $this->content = $content;
    $this->id = $id;
  }
  
  //Ajout d'une méthode d'instance getFullName
  public function getFullName(){
    return $this->title . " " . $this->author . " " . $this->creation_date;
  }
  public function toString(){
      $display = "<span>TOPIC</span>";
      $display .= "<ul>";
      $display .= "<li> TITLE : ". $this->title ."</li>";
      $display .= "<li> AUTHOR: ". $this->author ."</li>";
      $display .= "<li> CREATION_DATE : ". $this->creation_date ."</li>" ."</br>";
      $display . "</ul>";
      return $display;
    
  }
  public function toContent(){
      $displaycontent = "<span>CONTENU</span>";
      $displaycontent .= "<ul>";
      $displaycontent .= "<li>: ". $this->content ."</li>";
      $displaycontent . "</ul>";
      return $displaycontent;

  }
  
  static function toObject($data){
    $title = $data['title'];
    $author = $data['author'];
    $creation_date = $data['creation_date'];
    $content = $data['content'];

    return new Topics($title, $author, $creation_date, $content);
  }
}

//Object Tpics's creation
$topic1 = new Topics("Le nouvel observateur", "J. Doe", "2025-04-02","Le Nouvel Obs est un magazine d'actualité hebdomadaire français, créé en 1964 par Claude Perdriel et Jean Daniel. Il est l'héritier de France Observateur, lui-même successeur de L'Observateur politique, économique et littéraire né en 1950.","1");

echo "La description complète du topic 1 est : " . $topic1->toString() . "<br>";

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
    <ul>
     <li>
       <!-- Lien vers la page de détail du sujet avec l'ID 1 -->
       <a href="displaytopics.php?id=2">Voir plus</a>
     </li>
    </ul>
  </body>
</html>
