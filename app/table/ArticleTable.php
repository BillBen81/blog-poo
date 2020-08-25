<?php
/**
 * Created by PhpStorm.
 * User: betum
 * Date: 8/23/2020
 * Time: 10:44 AM
 */


class ArticleTable extends Connexion {

    public function findAll()
    {
        $query = $this->getPdo();

        $statement = $query->query("SELECT * FROM articles");
        return $statement->fetchAll();

    }

    public function findById($_id){
        $query = $this->getPdo();

        $statement = $query->query("SELECT * FROM articles WHERE art_no = $_id");
        return $statement->fetch();
    }

}