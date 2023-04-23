<?php

require_once('Librairies/autoload.php');

//Demarrage de session
session_start();

//Fin de session
session_destroy();

//Redirection vers l'accueil
/Redirection::redirection("index.php");
?>