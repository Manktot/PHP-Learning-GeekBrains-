<?php

include "db.php";

$id = (int)$_GET['id'];
$gallery = mysqli_query($db, "SELECT * FROM gallery where id = {$id}");
$imageItem = ($gallery) ? mysqli_fetch_assoc($gallery) : null;

function updateLikes($id, $db){
    mysqli_query($db, "UPDATE gallery SET likes = likes + 1 where id = {$id}");
}
updateLikes($id, $db);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title><?= $imageItem['name']?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-sm">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav col-6 offset-3 d-flex justify-content-end">
                <a class="nav-link" href="./index.php">На главную</a>
                <a class="nav-link active" aria-current="page" href="#"><?= $imageItem['name']?></a>
            </div>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="container-sm p-3">
        <?php if ($imageItem != null): ?>
        <div class="card p-0 mb-3 col-6 offset-3" >
            <img src="<?=$imageItem['path_original'] . $imageItem['file_name']?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h6 class="card-title"><?= $imageItem['name']?></h6>
                <p class="card-text"><?= $imageItem['description']?></p>
            </div>
            <div class="card-footer text-muted pl-0 pr-0">Лайков: <?=$imageItem['likes']?></div>
            <div class="card-footer text-muted pl-0 pr-0">Размер: <?=$imageItem['file_size_original']?> kb</div>
        </div>
        <?php else: ?>
            <div class="card border-warning mb-3" style="max-width: 18rem;">
                <div class="card-header">Ошибка</div>
                <div class="card-body">
                    <h5 class="card-title">Изображение с ID:<?=$id?> не найдено.</h5>
                    <p class="card-text">Обратитесь к администратору по данному вопросу.</p>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>

