<?php

// Изолируем переменные
function uploadImg(){
    $output = "Вы можете загрузить собственное изображение";
if (!empty($_FILES)) {
    $uploaddir = "./templates/src/images/gallery_img/big/" . $_FILES['userfile']['name'];
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

    //Проверка существует ли копия файла в нашей галереи по имени
    if (file_exists($uploadfile)) {
        header("Location: /?message=copy");
        exit();
    }

//Проверка на размер файла
    if($_FILES["userfile"]["size"] > 1024*5*1024)
    {
        header("Location: /?message=size");
        exit();
    }
//Проверка расширения файла
    $blacklist = array(".php", ".phtml", ".php3", ".php4");
    foreach ($blacklist as $item) {
        if(preg_match("/$item\$/i", $_FILES['userfile']['name'])) {
            header("Location: /?message=blacklist");
            exit();
        }
    }
//Проверка на тип файла
    $imageinfo = getimagesize($_FILES['userfile']['tmp_name']);
    if($imageinfo['mime'] != 'image/gif' && $imageinfo['mime'] != 'image/jpeg') {
        header("Location: /?message=notimage");
        exit();
    }

    if($_FILES['userfile']['type'] != "image/jpeg") {
        header("Location: /?message=format");
        exit();
    }

    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        header("Location: /?upload=ok");
        exit();
    } else {
        $message =  "Ошибка загрузки.";
        header("Location: /?message=error");
        exit();
    }

}
}
function uploadResult(){
    $codes = [
        'notimage' => 'Ошибка загрузки: некорректное расширение файла',
        'copy' => 'Ошибка загрузки: файл с таким именем уже существует',
        'ok' => 'Файл загружен',
        'size' => 'Ошибка загрузки: размер файла не должен превышать 5мб',
        'blacklist' => 'Ошибка загрузки: разрешены только изображения.',
        'format' => 'Ошибка загрузки: файл должен иметь расширение .jpeg',
        'error' => 'Ошибка загрузки'
    ];

    $messageCode = strip_tags($_GET['message']);
    return $codes[$messageCode];
};
uploadImg();
$message = uploadResult();


require_once './functions/getGallery.php';
require_once  "./templates/layouts/main.php"; // У меня несколько папок с проектами, а потому $_SERVER['DOCUMENT_ROOT']
                                              // лезет не туда.
$header = require_once "./templates/blocks/header.php";
$footer = require_once "./templates/blocks/footer.php";
$gallery = require_once "./templates/blocks/gallery/gallery.php";
$uploadForm = require_once "./templates/blocks/upload_form/upload_form.php";