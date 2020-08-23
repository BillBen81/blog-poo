<?php
/**
 * Created by PhpStorm.
 * User: betum
 * Date: 8/23/2020
 * Time: 9:26 AM
 */

class Connexion
{
    private $servername;
    private $username;
    private $password;
    private $bdd;
    private $pdo;

    public function __construct($_serverName, $_bddName, $_userName, $_passWord)
    {
       try{
           $this->password = $_passWord;
           $this->bdd = $_bddName;
           $this->username = $_userName;
           $this->servername = $_serverName;
           $this->pdo = new PDO("mysql:host=$this->servername;dbname=$this->bdd", $this->username, $this->password);
       }catch (PDOException $e){
           echo "Erreur : " . $e->getMessage();die;
       }

    }

    public function getPdo() {
        return $this->pdo;
    }
/*
    public function setServername($servername)
    {
        $this->servername = $servername;
    }

    public function setBdd($bdd)
    {
        $this->bdd = $bdd;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }


    public function getServername()
    {
        return $this->servername;
    }


    public function getBdd()
    {
        return $this->bdd;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

*/



}