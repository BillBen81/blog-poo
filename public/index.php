<?php

	//include_once "../app/Connexion.php";
/*
	$con = new mysqli("localhost","root", "", "db_devinbox");
	// Check connection
	if ($con->connect_error) {
		die("Connection failed: " . $con->connect_error);
	}
	for ($i=1; $i<100; $i++){
		$query = "insert into articles (art_code,art_lib,art_prix)
					values (\"cod$i\",\"article$i\",100*$i)";

		if ($con->query($query) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $query . "<br>" . $con->error;
		}
	}

*/
	if(isset($_GET["page"]))
	{
		$page = $_GET["page"];

		require '../app/Autoloader.php';

		Autoloader::register();

		ob_start();
		if ($page === "home") :
			require "../templates/accueil/home.php";
		elseif ($page === "articles") :
			require "../templates/articles/articles.php";
		elseif ($page === "editArticles") :
			$artId = $_GET["id"];
			require "../templates/articles/editArticle.php";
		elseif ($page === "utilisateur") :
			require "../templates/utilisateur/utilisateur.php";
		endif;

		ob_end_flush(); // closing the inner envelope will activate URL rewriting
		$content = ob_get_contents();
		ob_end_clean();
		require "../templates/base.php";
	}else{
		$content = "Page introuvable";
		require "../templates/base.php";
	}




 ?>
