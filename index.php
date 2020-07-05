<?php 

	require("personne.php");

	$person1 = new Personne();
	$person1->setNom("Vantsy");
	$person1->setPrenom("Rakotomaalala");
	$person1->setAdress("Antananarivo 102 AB");

	$nom = $person1->getNom();
	$prenom = $person1->getPrenom();
	$adresse = $person1->getAdress();

	// var_dump($person1->getNom());

	echo "Mon nom complet est : $nom $prenom";
	echo "<br>";
	echo "J'habite à : $adresse ";

 ?>
