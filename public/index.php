<?php

spl_autoload_register(function ($className)
{
    $root = dirname(__DIR__);
    $slash = DIRECTORY_SEPARATOR;
    $fileName = sprintf("%s%ssrc%s%s.php", $root, $slash, $slash, str_replace("\\", "/", $className));
    require $fileName;
});

$output = new \Output\OutputControl();
$output->executeHelloWorld();
$output->executeStrategy();
