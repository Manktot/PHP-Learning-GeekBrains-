<?php
function getGallery($path)
{
    $files = array_splice($path, 2);
    $files = array_chunk($files, 6); // Учитываем класс row в bootsrap, в котором максимум сетка на 12
    return $files;
}
$pathImages = scandir('./templates/src/images/gallery_img/big/');
$files = getGallery($pathImages);