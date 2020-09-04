<?php
    //require "../app/table/UtilisateurTable.php";
    use App\Table\UtilisateurTable;

    $user = new UtilisateurTable("localhost","db_devinbox", "root", "");

    $listUser = $user->findAll();

?>


<div class="row">
    <div class="col-md-10">


        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Adresse</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($listUser as $user): ?>
                <tr>
                    <th scope="row"><?= $user['user_no']?></th>
                    <th scope="row"><?= $user['user_nom']?></th>
                    <th scope="row"><?= $user['user_prenom']?></th>
                    <th scope="row"><?= $user['user_adresse']?></th>
                    <th scope="row">

                        <a href="" class="btn btn-secondary">Voir</a>
                        <a href="" class="btn btn-danger">Delete</a>
                        <a href="" class="btn btn-warning">Edit</a>

                    </th>
                </tr>
            <?php endforeach; ?>
            </tbody>

    </div>
</div>
</table>