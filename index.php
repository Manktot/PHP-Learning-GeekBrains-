<?php
session_start();
$session = session_id();


define("IMG_DIR", "/image/");

$db = @mysqli_connect('localhost:3306', 'guest', 'Azov64131', 'goods') or die("Ошибка соединения: " . mysqli_connect_error());

$goods = mysqli_query($db, "SELECT * FROM goods");
$result = mysqli_query($db, "SELECT count(id) as count FROM `basket` WHERE `session_id` = '{$session}'");
$count = mysqli_fetch_assoc($result)['count'];

$sum = mysqli_query($db, "SELECT SUM(goods.price) FROM basket, goods WHERE basket.goods_id = goods.id AND session_id = '{$session}'");
$sumFinal = mysqli_fetch_assoc($sum)['SUM(goods.price)'];

if (isset($_POST['action'])){
    $id = (int)$_POST['id'];
    if ($_POST['action'] == 'buy')  mysqli_query($db, "INSERT INTO `basket`(`goods_id`, `session_id`) VALUES ('{$id}','{$session}')");
    if ($_POST['action'] == 'delete') mysqli_query($db, "DELETE FROM `basket` WHERE id=('{$id}')");
    header("Location: /");
    die();
}

$basket = mysqli_query($db, "SELECT basket.id as id, basket.session_id as session, goods.name as name, goods.price as price FROM basket, goods WHERE basket.goods_id = goods.id AND session_id = '{$session}'");
?>
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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-sm">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav col-6 offset-3 d-flex justify-content-end">
                <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Корзина
                    <? if(isset($result) && $count > 0): ?>
                    (<?=$count ?>)
                    <? endif; ?>
                </button>
            </div>
        </div>
    </div>
</nav>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Корзина</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <?php foreach($basket as $position): ?>
                        <tr>
                            <th><?=$position['name']?></th>
                            <th><?=$position['price']?> золотых</th>
                            <th>
                                <form action="#" method="POST" hidden id="form<?=$position['id']?>">
                                    <input type="hidden" name="id" value="<?= $position['id']?>">
                                </form>
                                <button class="btn btn-outline-secondary" type="submit" form="form<?=$position['id']?>" name="action" value="delete">-</button>
                            </th>
                        </tr>
                    <?php endforeach;?>
                    <tr>
                        <th>Итого: </th>
                        <th><?= $sumFinal?> золотых</th>
                        <th></th>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary disabled">Оплатить</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>