<?php
namespace Controllers;

abstract class Controllers {

    protected $modele
    protected $nom_modele;

    public function _construct(){

        $this->modele = new $this->nom_modele();

    }
}
?>