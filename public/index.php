<?php 

	include_once "../app/Connexion.php";

	$page = $_GET["page"];


	ob_start();
	if ($page === "home") {
		require "../templates/accueil/home.php";
	} elseif ($page === "articles") {
		require "../templates/articles/artiles.php";
	}

	ob_end_flush(); // closing the inner envelope will activate URL rewriting
	$content = ob_get_contents();
	ob_end_clean();
	require "../templates/base.php";
 ?>

