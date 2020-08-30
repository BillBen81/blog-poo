<?php
/**
 * Created by PhpStorm.
 * User: betum
 * Date: 8/23/2020
 * Time: 11:12 AM
 */

namespace App;

class Utilisateur
{
    private $userId;
    private $userName;
    private $userLastName;
    private $userAdress;

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param mixed $userName
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    /**
     * @return mixed
     */
    public function getUserLastName()
    {
        return $this->userLastName;
    }

    /**
     * @param mixed $userLastName
     */
    public function setUserLastName($userLastName)
    {
        $this->userLastName = $userLastName;
    }

    /**
     * @return mixed
     */
    public function getUserAdress()
    {
        return $this->userAdress;
    }

    /**
     * @param mixed $userAdress
     */
    public function setUserAdress($userAdress)
    {
        $this->userAdress = $userAdress;
    }



}