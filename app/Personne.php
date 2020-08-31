<?php 

	//nommage variable : camelCase ou snake_case

namespace App;

class Personne
{
    private $nom;
    private $prenom;
    private $adresse;

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getAdress()
    {
        return $this->adresse;
    }

    public function setAdress($adress)
    {
        $this->adresse = $adress;
    }
}


 ?>