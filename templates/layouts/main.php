<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Такое подключение временное решение -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./templates/css/style.css" rel="stylesheet">
    <link href="./templates/blocks/gallery/scripts/fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet">
    <link href="./templates/blocks/gallery/scripts/fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet">
    <link href="./templates/blocks/gallery/gallery.css" rel="stylesheet">
    <title>Домашняя работа</title>
</head>
    <body>
 <?= $header ?>
<?= $gallery ?>
<?= $uploadForm ?>
<?= $footer ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>