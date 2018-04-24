<?php

define("ROOT", __DIR__."/../");
require_once '../vendor/autoload.php';

$router = new App\Routes\webRouter();

$router->webRoute();

