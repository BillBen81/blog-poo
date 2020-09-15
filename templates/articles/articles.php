
<?php
    //require '../app/table/ArticleTable.php';
    use App\Table\ArticleTable;
    use App\Paginator;

    $articles = new ArticleTable("localhost","db_devinbox", "root", "");

    $pagination = new Paginator("localhost","db_devinbox", "root", "","articles");
   // $pagination = new Paginator("localhost","db_devinbox", "root", "");


    //$PagArticles = $pagination->getData();
    $list = $pagination->getData();
    $pages = $pagination->getPaginationNumber();

    $currentPage = $pagination->current_page();

   // $list = $articles->findAll();
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
                    <th scope="row"><?= $item->art_no ?></th>
                    <th scope="row"><?= $item->art_code ?></th>
                    <th scope="row"><?= $item->art_lib ?></th>
                    <th scope="row"><?= $item->art_prix ?></th>
                    <th scope="row">

                        <a href="" class="btn btn-secondary">Voir</a>
                        <a href="" class="btn btn-danger">Delete</a>
                        <a href="index.php?page=editArticles&id=<?= $item->art_no ?>" class="btn btn-warning">Edit</a>

                    </th>
                </tr>
            <?php endforeach; ?>

            </tbody>
            <tfoot>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <?php if(isset($currentPage) && $currentPage > 3): ?>
                        <li class="page-item  <?php if ($currentPage == 1) echo "active" ;?>"><a class="page-link" href="?page=articles&pg=<?= 1; ?>">Début</a></li>
                    <?php endif; ?>

                    <?php $point = 1; ?>
                    <?php  for($i=1; $i<=$pages; $i++): ?>


                        <?php   if($i < $currentPage - 2 ) : ?>
                            <?php if($point == 1): ?>
                                <li class="page-item  <?php if ($currentPage == $i) echo "active" ;?>"><a class="page-link" href="?page=articles&pg=<?= $currentPage - 3; ?>">...</a></li>
                            <?php endif; ?>
                        <?php elseif ($i > $currentPage + 2): ?>
                            <li class="page-item  <?php if ($currentPage == $i) echo "active" ;?>"><a class="page-link" href="?page=articles&pg=<?= $i; ?>">...</a></li>
                            <?php break; ?>
                        <?php else: ?>
                            <li class="page-item  <?php if ($currentPage == $i) echo "active" ;?>"><a class="page-link" href="?page=articles&pg=<?= $i; ?>"><?= $i; ?></a></li>
                        <?php endif; ?>
                        <?php $point = $point + 1; ?>


                     <?php endfor; ?>

                    <?php if(isset($currentPage) && $currentPage > 1): ?>
                        <li class="page-item  <?php if ($currentPage == $pages) echo "active" ;?>"><a class="page-link" href="?page=articles&pg=<?= $pages; ?>">Fin</a></li>
                    <?php endif; ?>

                </ul>
            </nav>

            </tfoot>

    </div>
</div>
</table>

