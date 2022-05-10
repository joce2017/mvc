<?php

function load(){

    $page = strip_tags($_GET['page']);

    $page = (!$page) ? 'pages/home.php' : "pages/{$page}.php";

    if(!file_exists($page)){

        throw new \Exception("Tem alguma coisa errada!");
    }

    return $page;


}

