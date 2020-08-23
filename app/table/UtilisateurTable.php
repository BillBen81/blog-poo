<?php
/**
 * Created by PhpStorm.
 * User: betum
 * Date: 8/23/2020
 * Time: 11:15 AM
 */

class UtilisateurTable extends Connexion{
    public function getAllUser(){
        $query = $this->getPdo();

        $statement = $query->query("SELECT * FROM utilisateur");
        return $statement->fetchAll();
    }
}