<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Детали заказа</title>
</head>
<body>
<?php include "view/menu.php";?>
<div class="container-fluid">
    <div class="container-sm pt-5">
        <h3>Детали заказа: <?= $order_session_id["id"] ?> | Клиент: <?= $order_session_id["user_name"] ?> | Телефон: <?= $order_session_id["user_phone"] ?></h3>
        <div class="row col-6">
            <table class="table">
                <?php foreach($basket_details as $position): ?>
                    <tr>
                        <th><?=$position['name']?></th>
                        <th><?=$position['price']?> золотых</th>
                    </tr>
                <?php endforeach;?>
                <tr>
                    <th>Итого: </th>
                    <th><?= $sumFinal?> золотых</th>
                    <th></th>
                </tr>
                <tr>
                    <form action="#" method="POST" hidden id="form<?=$position['id']?>">
                        <input type="hidden" name="id" value="<?= $position['id']?>">
                    </form>
                    <td><button class="btn btn-outline-secondary" type="submit" form="form<?=$position['id']?>" name="admin_action" value="remove">Отменить</button></td>
                    <td><button class="btn btn-outline-secondary" type="submit" form="form<?=$position['id']?>" name="admin_action" value="approve">Подтвердить</button></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>










