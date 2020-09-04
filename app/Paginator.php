<?php
/**
 * Created by PhpStorm.
 * User: christian_betum
 * Date: 04/09/2020
 * Time: 14:02
 */

namespace App;


class Paginator extends Connexion
{
    private $db;
    private $table;
    private $total_records;
    private $limit = 5;

    public function __construct($table)
    {
        $this->table = $table;
        $this->db = $this->getPdo();
        $this->setTotalRecords();
    }

    public function setToTalRecords()
    {
        $statement = $this->db->prepare("SELECT * FROM $this->table");
        $statement->execute();
        $this->total_records = $statement->rowCount();
    }

    public function current_page(){
        return isset($_GET['page']) ? (int)$_GET['page'] :1;
    }
}