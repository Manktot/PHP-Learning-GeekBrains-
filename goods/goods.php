<?php
include "db.php";
$goods = mysqli_query($db, "SELECT * FROM goods");

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
                <a class="nav-link" href="./../index.php" >На главную</a>
                <a class="nav-link" href="./calc_simple/calc_form.php" >Обычный калькулятор</a>
                <a class="nav-link" href="./calc_ajax/calc_ajax.php" >Ajax калькулятор</a>
                <a class="nav-link  active" href="#">Товары</a>
            </div>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="container-sm img-fluid">
        <div class="row">
            <h2 class="mt-5 mb-5">Товары</h2>
        </div>
        <div class="row  d-flex justify-content-start">
            <?php foreach($goods as $item): ?>
                <div class="card p-0 mb-4 me-3" style="width: 16rem;">
                    <a href="item.php?id=<?=$item['id']?>"><img src="<?=$item['image']?>" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h6 class="card-title"><?= $item['name']?></h6>
                        <p class="card-text"><?= $item['description']?></p>
                    </div>
                    <div class="card-footer text-muted pl-0 pr-0">Цена: <?=$item['price']?> g.</div>
                    <div class="card-footer text-muted pl-0 pr-0">Осталось: <?=$item['count']?></div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>