<?php
/**
 * Created by PhpStorm.
 * User: christian_betum
 * Date: 04/09/2020
 * Time: 14:02
 */

namespace App;


class Paginator// extends Connexion
{
    private $db;
    private $table;
    private $total_records;
    private $limit = 10;

    public function __construct($table)
    {
        $this->table = $table;
        //$this->db = $this->getPdo();
        //var_dump($this->getPdo()); die;
        $this->db = new \PDO("mysql:host=localhost; dbname=db_devinbox", "root", "");
        $this->setTotalRecords();
    }

    public function setToTalRecords()
    {

        $statement = $this->db->prepare("SELECT * FROM $this->table");

        $statement->execute();
        $this->total_records = $statement->rowCount();
    }

    public function current_page(){
        return isset($_GET['pg']) ? (int)$_GET['pg'] :1;
    }

    public function getData()
    {
        $start = 0;
        if($this->current_page() > 1){
            $start = ($this->current_page() * $this->limit) - $this->limit;
        }

        $query = "SELECT * FROM $this->table LIMIT $start, $this->limit";

        $statement = $this->db->prepare($query);
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getPaginationNumber()
    {
        return ceil($this->total_records / $this->limit);
    }
}