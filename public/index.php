<?php

    declare(strict_types=1);    

    include_once "../vendor/autoload.php";

    const ROOT_DIRECTORY = __DIR__;

    $request = new SimplyRouter\Request($_GET, $_POST, $_SERVER);

    $controller = new SimplyRouter\Controller($request);
    $controller->run();
    