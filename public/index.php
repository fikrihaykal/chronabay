<?php

    use \App\Core\Router;

    require_once '../app/Bootstrap.php';
    require_once '../app/core/Constants.php';
    require_once dirname(__DIR__).'/vendor/autoload.php';

    $router = new Router();

    if(isset($_GET['url'])){
        $url = $_GET['url'];
    } else{
        $url = '/';
    }

    $router->dispatch($url);

?>