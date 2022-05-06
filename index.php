<?php

spl_autoload_register(function($className) {
    $path = __DIR__ . "/src/" . str_replace("\\", "/", $className) . ".php";
    require $path;
});

use Class01;
use SubDirectory\Class02;

$obj01 = new Class01();
$obj02 = new Class02();

$obj01->call();
echo "<br>";
$obj02->call();
