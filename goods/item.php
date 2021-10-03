<?php

include "db.php";

$id = (int)$_GET['id'];
$goods = mysqli_query($db, "SELECT * FROM goods where id = {$id}");
$item = ($goods) ? mysqli_fetch_assoc($goods) : null;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title><?= $item['name']?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-sm">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav col-6 offset-3 d-flex justify-content-end">
                <a class="nav-link" href="./../index.php" >На главную</a>
                <a class="nav-link" href="./../calc_simple/calc_form.php" >Обычный калькулятор</a>
                <a class="nav-link" href="./../calc_ajax/calc_ajax.php" >Ajax калькулятор</a>
                <a class="nav-link" href="./../index.php">Товары</a>
            </div>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="container-sm p-3">
        <?php if ($item != null): ?>
            <div class="card p-0 mb-3 col-6 offset-3" >
                <img src="<?=$item['image']?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h6 class="card-title"><?= $item['name']?></h6>
                    <p class="card-text"><?= $item['description']?></p>
                </div>
                <div class="card-footer text-muted pl-0 pr-0">Изготовлено: <?=$item['company']?></div>
                <div class="card-footer text-muted pl-0 pr-0">Цена: <?=$item['price']?>g</div>
                <div class="card-footer text-muted pl-0 pr-0">В наличии: <?=$item['count']?>шт</div>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">Количество:</span>
                    <input type="text" class="form-control" placeholder="1" aria-describedby="basic-addon1">
                    <button class="btn btn-outline-secondary" type="submit" id="button-submit">В корзину</button>
                </div>
            </div>
        <?php else: ?>
            <div class="card border-warning mb-3" style="max-width: 18rem;">
                <div class="card-header">Ошибка</div>
                <div class="card-body">
                    <h5 class="card-title">Товар с ID:<?=$id?> не найден.</h5>
                    <p class="card-text">Обратитесь к администратору по данному вопросу.</p>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>