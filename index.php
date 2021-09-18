<?php
/*
    Я не представляю как можно выполнить 5 задание за один вызов renderTemplates
    что-бы подтянулись и функции из functions.php и блоки с их относительными путями.

    Лучше сделаю как обычно. Работает ведь и ладно.
*/
include_once "functions/functions.php"; // Функции

$header =  renderTemplate("page-header", "templates/src/blocks/page-header/");
$footer =  renderTemplate("page-footer", "templates/src/blocks/page-footer/");
$style = "templates/src/SCSS/style.css"; // Наверно так. Все подключения в одном файле. Стили других блоков
                                         // подключены в style.scss.

function renderTemplate($page, $path="")
{
    ob_start();
    include $path . $page . ".php";
    return ob_get_clean();
}

include_once "templates/layout/layout.php"; // Шаблон