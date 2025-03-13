<?php

//////////////////////////
//Utilisation de Heredoc//
//////////////////////////

//Dans les faits, le traitement du texte multiligne sera dans le cas de Heredoc
//Identique à l'utilisation d'un echo avec doubles guillemets
$variable = "Jean";
$variable2 = 42;

//Définition d'un texte multilignes sous l'alias MONTEXTE
$monTexteMultiLigne = <<<MONTEXTE
  Ceci est le texte que je souhaite écrire, évidemment il doit être long
  <br>Comme pour les autres exemples, je peux mettre des balises HTML dans le texte
  <h1>Je peux préciser que c'est $variable</h1> qui a écrit le texte<br>
  Quand ce texte a été écrit, l'auteur avait $variable2 ans
MONTEXTE;

//Affichage du texte multiligne
echo $monTexteMultiLigne;

/////////////////////////
//Utilisation de Nowdoc//
/////////////////////////

//Dans les faits, le traitement du texte multiligne sera dans le cas de Heredoc
//Identique à l'utilisation d'un echo avec simple guillemets

//Définition d'un texte multiligne sous l'alias MONTEXTE
//Notez que pour une utilisation de Nowdoc l'alias doit être défini entre guillemets
$monTexteMultiLigne = <<<'MONTEXTE'
  Ceci est le texte que je souhaite écrire, évidemment il doit être long
  <br>Comme pour les autres exemples, je peux mettre des balises HTML dans le texte
  <h1>Je peux préciser que c'est $variable</h1> qui a écrit le texte<br>
  Quand ce texte a été écrit, l'auteur avait $variable2 ans
MONTEXTE;

//Affichage du texte multiligne sans support des variables
echo $monTexteMultiLigne;
?>