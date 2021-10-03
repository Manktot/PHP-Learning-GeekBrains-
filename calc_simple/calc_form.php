<?php
include "./../functions/calculator.php"
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Простой калькулятор</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-sm">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav col-6 offset-3 d-flex justify-content-end">
                <a class="nav-link" href="./../index.php" >На главную</a>
                <a class="nav-link  active" href="#" >Обычный калькулятор</a>
                <a class="nav-link" href="./../calc_ajax/calc_ajax.php" >Ajax калькулятор</a>
                <a class="nav-link" href="./../goods/goods.php">Товары</a>
            </div>
        </div>
    </div>
</nav>
<div class="container-fluid mt-5">
    <div class="container-sm">
        <div class="row">
            <div class="col-10 img-thumbnail offset-1">
                <div class="row"><h4>Обычный калькулятор</h4></div>
                <form action="#" method="post">
                    <div class="input-group">
                        <input type="text"  class="form-control" name="arg1" required value="<?=$arg1?>">
                        <select class="form-select btn-secondary" name="operation">
                            <option value="add" <?php if ($_POST['operation']=='add') echo 'selected'; ?>>Сложение</option>
                            <option value="sub" <?php if ($_POST['operation']=='sub') echo 'selected'; ?>>Вычитание</option>
                            <option value="multi" <?php if ($_POST['operation']=='multi') echo 'selected'; ?>>Умножение</option>
                            <option value="div" <?php if ($_POST['operation']=='div') echo 'selected'; ?>>Деление</option>
                        </select>
                        <input type="text" class="form-control col-5" name="arg2" required value="<?=$arg2?>">
                        <button class="btn btn-secondary" type="submit">Посчитать</button>
                        <input class="form-control" type="text" value="<?= $result ?>" readonly>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>