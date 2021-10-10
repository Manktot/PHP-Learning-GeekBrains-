<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Оформление заказ</title>
</head>
<body>
<?php include "view/menu.php";?>
<div class="container-fluid">
    <?php if( $_GET['order'] == 'ok'):?>
    <div class="container-sm col-2 offset-5 pt-5">
        <div class="card" style="width: 18rem;">
            <img src="<?=IMG_DIR?>success.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Заявка отравлена</h5>
                <p class="card-text">С вами свяжутся в ближайшее время по номеру телефона для уточнения статуса заказа.</p>
                <a href="/index.php" class="btn btn-primary">На главную</a>
            </div>
        </div>
    </div>
    <?php else:?>
        <div class="container-sm col-6 offset-3">
            <div class="row">
                <h2 class="mt-5 mb-5">Ваш заказ:</h2>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Товар</th>
                    <th scope="col">Стоимость</th>
                </tr>
                </thead>
                <tbody>
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
                </tbody>
            </table>
            <div class="row">
                <h2 class="mt-5 mb-5">Введите контактные данные</h2>
            </div>
            <form action="#" method="POST">
                <div class="input-group">
                    <span class="input-group-text">Имя и номер телефона</span>
                    <input type="text" name="name" class="form-control" placeholder="Имя" required>
                    <input type="tel" name="phone" class="form-control" placeholder="Номер телефона" required>
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" name="action" value="order">Отправить</button>
                </div>
            </form>
        </div>
    <?php endif?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>










