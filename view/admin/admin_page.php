<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Админка</title>
</head>
<body>
<?php include "view/menu.php";?>
<div class="container-fluid">
<div class="container-sm pt-5">
        <h3>Заказы ожидающие проверки</h3>
<div class="row col-6">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Имя клиента</th>
            <th scope="col">Телефон</th>
            <th scope="col">Действие</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($unfinished_orders as $order): ?>
        <tr>
            <th scope="row"><?=$order['id']?></th>
            <td><?=$order['user_name']?></td>
            <td><?=$order['user_phone']?></td>
            <td><a href="order_details.php/?order=<?=$order['id']?>"><button type="button" class="btn btn-primary">Проверить</button></a></td>
        </tr>
       <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>

    <div class="container-sm pt-5">
        <h3>Заказы подтвержденные</h3>
        <div class="row col-6">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Имя клиента</th>
                    <th scope="col">Телефон</th>
                    <th scope="col">Действие</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($finished_orders as $order): ?>
                    <tr>
                        <th scope="row"><?=$order['id']?></th>
                        <td><?=$order['user_name']?></td>
                        <td><?=$order['user_phone']?></td>
                        <td><a href="order_details.php/?order=<?=$order['id']?>"><button type="button" class="btn btn-primary">Проверить</button></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="container-sm pt-5">
        <h3>Заказы отмененные</h3>
        <div class="row col-6">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Имя клиента</th>
                    <th scope="col">Телефон</th>
                    <th scope="col">Действие</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($removed_orders as $order): ?>
                    <tr>
                        <th scope="row"><?=$order['id']?></th>
                        <td><?=$order['user_name']?></td>
                        <td><?=$order['user_phone']?></td>
                        <td><a href="order_details.php/?order=<?=$order['id']?>"><button type="button" class="btn btn-primary">Проверить</button></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>










