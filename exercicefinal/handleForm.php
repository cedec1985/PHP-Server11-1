<?php 
//Vérification du statut de la session
if(session_status() != PHP_SESSION_ACTIVE) session_start();
$email = isset($_POST["email"]) ? $_POST["email"] : null;
$password = isset($_POST["password"]) ? $_POST["password"] : null;
$formIsValid = true;
//Création d'un cookie username, valide pour une durée d'1 mois
setcookie("email", $email, time()+3600*24*31);
if(!$email || !$password){
   $formIsValid = false; 
}
//vérification de la validité des données du formulaire côté serveur
  if($_SERVER["REQUEST_METHOD"] == "POST" && $formIsValid){
     $password = $_POST['password'];
     $email = $_POST['email'];
    //Procédure d'authentification
    if(true){
        http_response_code(200);
   //     echo 'Bienvenue admin';
      //REDIRECTION
     
    }else{
        http_response_code(400);
 //       echo 'email ou mot de passe incorrect';
    }
     header('Location: topics.php');
    if(null !==$_COOKIE["email"] && null !==$_COOKIE["password"]){
      $email = $_COOKIE["email"];
      $password = $_COOKIE["password"];
      echo "<h1>Bonjour $email!! mot de passe : $password</h1>";
    }
     
  } else if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "le formulaire n'est pas valide";
  } 
    //FORCER LA FIN DU SCRIPT
   exit;
  ?>

