<?php

$ur1 = explode ("?", $_SERVER["REQUEST_URI"]);
$ur1 = urldecode ($ur1[0]);
$ur1 = explode ("/", $ur1);
$ur1 = array_pop($ur1);

$pagelink = $ur1 == "" ? "index": $ur1;

if (!file_exists("contents/$pagelink.php"))
$pagelink = "404";

switch($pagelink)
{
    case "index":
        $title="Главная страница";
        break;
    case "login":
        $title="Авторизация";
        break;
    case "registration":
        $title="Регистрация";
        break;
    default: 
        $title="Ошибка";
}

require "template/header.php";
require "template/sidebar.php";
require "contents/$pagelink.php";
require "template/footer.php";