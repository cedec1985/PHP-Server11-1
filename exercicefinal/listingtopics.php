<?php

if(session_status() != PHP_SESSION_ACTIVE)
session_start();
$email = isset($_POST["email"]) ? $_POST["email"] : null;
$password = isset($_POST["password"]) ? $_POST["password"] : null;
$email = isset($_SESSION["email"]) ? $_SESSION["email"] : null;
$password = isset($_SESSION["password"]) ? $_SESSION["password"] : null;
 echo "<h1>Bienvenue $email, ravi de te revoir...</h1>";
?>
<?php 

require_once("topics.php");

?>
<!DOCTYPE html>
<html lang="fr">
  <meta name="viewport" content= "width=device-width, initial-scale=1.0">
  <head>
    <title>Liste des topics</title>
  </head>
  <body>
    <div class="output">
      Loading...
    </div>
  </body>
</html>



