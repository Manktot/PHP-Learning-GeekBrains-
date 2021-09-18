<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= $style ?>">
    <title>Домашняя работа</title>
</head>
<body>
<?= $header ?>
<div class="section-main container-fluid">
    <div class="container-md">
        <div class="row pb-5">
            <div class="col-12">
                <h1 class="display-6 ">Значения меняются при обновлении страницы</h1>
            </div>
        </div>
        <!-- Задание  №1-->
        <div class="row pb-5">
            <div class="col-6">
                <div class="card">
                    <h5 class="card-header">Задание №1</h5>
                    <div class="card-body">
                        <p class="card-text"><?= $task_01 ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /  Задание  №1-->

        <!-- Задание  №2-->
        <div class="row pb-5">
            <div class="col-6">
                <div class="card">
                    <h5 class="card-header">Задание №2</h5>
                    <div class="card-body">
                        <p class="card-text pb-1"><?= $task_02 ?></p>
                        <p class="card-text"><?= $task_02_recursion ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Задание  №2-->

        <!-- Задание  №3 + №4-->
        <div class="row pb-5">
            <div class="col-6">
                <div class="card">
                    <h5 class="card-header">Задание №3 + №4</h5>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted mb-2">Ноль заложен в рандом и вернет: "Ошибка! На ноль делить нельзя."</h6>
                        <h6 class="card-subtitle mb-2 text-muted mb-4">Дополнительно в рандом заложена несуществующая функция destroyAllHuman</h6>

                        <p class="card-text"><?= $task_04 ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /  Задание  №3 + №4-->

        <!-- Задание  №5-->
        <div class="row pb-5">
            <div class="col-6">
                <div class="card">
                    <h5 class="card-header">Задание №5</h5>
                    <div class="card-body">
                        <p class="card-text mb-3">Я не представляю как можно выполнить 5 задание за один вызов renderTemplates без массивов и циклов
                            что-бы подтянулись и функции из functions.php и блоки с их относительными путями. Не очень понимаю, зачем именно такой способ нужен. Выглядит как излишне усложненное и запутанное решение.</p>
                        <p class="card-text"> Эта страница тоже собрана из разных блоков. Стили подключены в одном файле style.scss, а все остальное подключено в index.php</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /  Задание  №5-->

        <!-- Задание  №6-->
        <div class="row pb-5">
            <div class="col-6">
                <div class="card">
                    <h5 class="card-header">Задание №6</h5>
                    <div class="card-body">
                        <p class="card-text"><?= $task_06 ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /  Задание  №6-->

        <!-- Задание  №7-->
        <div class="row pb-5">
            <div class="col-6">
                <div class="card">
                    <h5 class="card-header">Задание №7</h5>
                    <div class="card-body">
                        <p class="card-text"><?= $task_07 ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /  Задание  №7-->
    </div>
</div>
<?= $footer ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>

