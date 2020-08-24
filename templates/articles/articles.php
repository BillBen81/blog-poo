
<?php
    require '../app/table/ArticleTable.php';
    $articles = new ArticleTable("localhost","db_devinbox", "root", "");
    $list = $articles->findAll();
?>

<div class="row">
    <div class="col-md-10">


        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Code</th>
                <th scope="col">Libellé</th>
                <th scope="col">Prix</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($list as $item): ?>
                <tr>
                    <th scope="row"><?= $item['art_no']?></th>
                    <th scope="row"><?= $item['art_code']?></th>
                    <th scope="row"><?= $item['art_lib']?></th>
                    <th scope="row"><?= $item['art_prix']?></th>
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

