<?php 
//initialisation des données en DB, NE PAS SUPPRIMER
// + Création de la connexion
require_once("initializer.php");
$title = "exercice de synthèse";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
     <style>
        form div{
          padding: 10px 10px;  
          vertical-align: top;
        }
         .error{
           color: red;
         }
      </style>
<body>
   <h1><?php echo $title; ?></h1>
    <h2><?php echo "Formulaire d'identification" ?></h2>  
    <form name="form" action="handleForm.php" method="post">
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" name="password">
            <div class= "error error-password"></div>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email">
            <div class= "error error-email"></div>
        </div>
        <div>
            <button type="submit" name="send">Envoyer</button>
        </div>
    </form>
    <script>
//envoi des données du formulaire et validation du formulaire
        const form = document.form;
        form.onsubmit = validateForm

        function validateForm($event) {

            const password = form.password.value;
            const email = form.email.value;
            const pError = document.querySelector(".error-password")
            const eError = document.querySelector(".error-email")
            if (!password) pError.innerHTML = "Le mot de passe est obligatoire"
            else pError.innerHTML = ""
            if (!email) eError.innerHTML = "L'email est obligatoire";
            else eError.innerHTML = ""
            if (!password || !email) return;
            else form.submit();
        }
    </script> 
</body>
</html>
