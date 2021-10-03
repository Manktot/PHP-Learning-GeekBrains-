<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous">
    </script>
    <script src="ajax.js"></script>
    <title>Калькулятор AJAX</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-sm">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav col-6 offset-3 d-flex justify-content-end">
                <a class="nav-link " href="./../index.php" >На главную</a>
                <a class="nav-link" href="./../calc_simple/calc_form.php" >Обычный калькулятор</a>
                <a class="nav-link active" href="#" >Ajax калькулятор</a>
                <a class="nav-link" href="./../goods/goods.php">Товары</a>
            </div>
        </div>
    </div>
</nav>
<div class="container-fluid mt-5">
    <div class="container-sm">
     <div class="row">
            <div class="col-10 img-thumbnail offset-1">
                <div class="row"><h4>Калькулятор AJAX</h4></div>
                    <div class="input-group">
                        <input type="text"  id="operand1" class="form-control" required value="">
                        <input type="radio" class="btn-check" name="options" id="option1" value="add" autocomplete="off">
                        <label class="btn btn-secondary" for="option1">+</label>
                        <input type="radio" class="btn-check" name="options" id="option2" value="sub" autocomplete="off">
                        <label class="btn btn-secondary" for="option2">-</label>
                        <input type="radio" class="btn-check" name="options" id="option3" value="multi" autocomplete="off">
                        <label class="btn btn-secondary" for="option3">×</label>
                        <input type="radio" class="btn-check" name="options" id="option4" value="div" autocomplete="off">
                        <label class="btn btn-secondary" for="option4">÷</label>
                        <input type="text" id="operand2" class="form-control col-5" name="arg2" required value="">
                        <button class="btn btn-secondary" id="submit" type="submit">Посчитать</button>
                        <input class="form-control"  id="result" value="" readonly>
                    </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>