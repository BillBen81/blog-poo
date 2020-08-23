<?php
    require "../app/table/UtilisateurTable.php";
    $user = new UtilisateurTable("localhost","db_devinbox", "root", "");

    $listUser = $user->getAllUser();

?>


