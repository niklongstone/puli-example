<?php
require '../vendor/autoload.php';

$factoryClass = PULI_FACTORY_CLASS;
$factory = new $factoryClass();
$myRepo = $factory->createRepository();

echo $myRepo->get("/myapp/views/index.html.twig")->getBody();
