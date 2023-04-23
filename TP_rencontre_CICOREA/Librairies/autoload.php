<?php

require_once('Librairies/bdd.php');
require_once('Librairies/Redirection.php');
require_once('Librairies/Rendu.php');

spl_autoload_register($classe_autoload){

    $classe_autoload = lcfirst($classe_autoload);
    $classe_autoload = str_replace("\\", "/", $classe_autoload);

    //chargement de la page ( la variable classe_autoload représente le nom de la page qui varie selon la page demandée par l'utilisateur )
    require_once("Librairies/$classe_autoload.php");
    


};
?>