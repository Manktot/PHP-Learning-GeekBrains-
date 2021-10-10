<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Товары</title>
</head>
<body>
<?php include "view/menu.php";?>
<div class="container-fluid">
    <div class="container-sm">
        <div class="row">
            <h2 class="mt-5 mb-5">Товары</h2>
        </div>
        <div class="row  d-flex justify-content-start">
            <?php foreach($goods as $item): ?>
                <form action="#" method="POST" hidden id="item<?= $item['id']?>">
                    <input type="hidden" name="id" value="<?= $item['id']?>">
                </form>
                <div class="card p-0 mb-4 me-3" style="width: 16rem;">
                    <img src="<?=IMG_DIR . $item['image']?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title"><?= $item['name']?></h6>
                        <p class="card-text"><?= $item['description']?></p>
                    </div>
                    <div class="card-footer text-muted pl-0 pr-0">Цена: <?=$item['price']?> g.</div>
                    <button class="btn btn-outline-secondary" type="submit" id="button-submit" form="item<?= $item['id']?>" name="action" value="buy">В корзину</button>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>