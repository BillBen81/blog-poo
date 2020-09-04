<?php
/**
 * Created by PhpStorm.
 * User: betum
 * Date: 8/23/2020
 * Time: 11:15 AM
 */

namespace App\Table;
use App\Connexion;

class UtilisateurTable extends Connexion{
    public function findAll(){
        $query = $this->getPdo();

        $statement = $query->query("SELECT * FROM utilisateur");
        return $statement->fetchAll();
    }
}