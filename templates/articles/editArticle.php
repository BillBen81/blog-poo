<?php
/**
 * Created by PhpStorm.
 * User: christian_betum
 * Date: 25/08/2020
 * Time: 10:44
 */
    require "../app/table/ArticleTable.php";

    $oArticle = new ArticleTable("localhost","db_devinbox", "root", "");
    $article = $oArticle->findById($artId);
    //var_dump($article);die;

    if(isset($artId) && $artId != 0) : ?>
        <div class="row">
            <div class="col-md-10">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Code Article</label>
                        <input type="text" class="form-control" id="artCode" value="<?= $article["art_no"]; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Libellé Article</label>
                        <input type="text" class="form-control" id="artLib"  value="<?= $article["art_lib"]; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Prix Article</label>
                        <input type="text" class="form-control" id="artPrix"  value="<?= $article["art_prix"]; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </form>

            </div>
        </div>
   <?php endif;
