<?php

// reference fonction getPdo() dans ../bdd.php
namespace Models;

abstract class Model{

    protected $pdo;

    public function _construct(){

        $this->pdo = /bdd.getPdo();
    }
}
?>