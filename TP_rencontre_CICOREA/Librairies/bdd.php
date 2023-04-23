<?php

//Je me suis fait aider pour la construction de la fonction getPdo(), j'ai mis beaucoup de temps à comprendre
class bdd{

    public function getPdo : PDO{

        $pdo = new PDO('mysql:host=localhost;dbname=mvc_rencontre;charset=utf8', 'root', '', 
        
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]

    );

        return $pdo;
    }
}
?>