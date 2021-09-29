<?php
include "db.php";
$gallery = mysqli_query($db, "SELECT * FROM gallery ORDER BY likes DESC");

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Галлерея</title>
</head>
<body>
<div class="container-fluid">
    <div class="container-sm img-fluid">
        <div class="row">
            <h2 class="mt-5 mb-5">Галерея</h2>
        </div>
        <div class="row  d-flex justify-content-start">

            <?php foreach($gallery as $image): ?>
            <div class="card p-0 mb-4 me-3" style="width: 16rem;">
                <a href="image.php?id=<?=$image['id']?>"><img src="<?=$image['path_mini'] . $image['file_name']?>" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title"><?= $image['name']?></h6>
                    <p class="card-text"><?= $image['description']?></p>
                </div>
                <div class="card-footer text-muted pl-0 pr-0">Лайков: <?=$image['likes']?></div>
                <div class="card-footer text-muted pl-0 pr-0">Размер: <?=$image['file_size_mini']?> kb</div>
            </div>
            <?php endforeach;?>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>

