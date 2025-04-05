<?php 
//Démarrer la session
session_start();
//Détruire toutes les variables de session
session_unset();
//Détruire la session
session_destroy();
//Redirection vers le formulaire d'identification
header('Location: index.php');
exit();
?>