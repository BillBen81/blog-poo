
<!doctype html>
<html lang="en">
<head>
    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>
<body>

<?php include_once "header.php" ; ?>

    <div class="container">
        <div class="row">

            <div class="col-md-2">
                <ul>
                    <li><a href="" class="">Article</a></li>
                    <li><a href="" class="">Utilisateur</a></li>
                </ul>
            </div>
            <div class="col-md-10">

                <?= $content ?>
            </div>
        </div>


    </div>

<?php include_once "footer.php" ; ?>
</body>
</html>
