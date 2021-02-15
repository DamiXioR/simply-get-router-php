<?php
    include_once "../vendor/autoload.php";

    const ROOT_DIRECTORY = __DIR__;

    $controller = new SimplyRouter\Controller();
    $controller->run();
    