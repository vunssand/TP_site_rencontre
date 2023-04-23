<?php

class Rendu {

    //fonction tirée du cours ( TP mvc )

    public function rendu(string $path, array $var = []){

        // extrait les variables du tableau $var
        extract($var);

        //création d'un buffer pour stocker les variables
        ob_start();

        //require_once() va importer le code PHP d'autres fichiers dont le chemin est indiqué en paramètres
        require_once('View/' . $path . '.php');

        //ob_get_contents() va lire le contenu du buffer crée juste avant par ob_start()
        $contenu_page = ob_get_contents();
        require_once('View/mise_en_forme.php');
        
    }
}
?>