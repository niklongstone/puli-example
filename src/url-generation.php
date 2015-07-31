<?php
require '../vendor/autoload.php';

$factoryClass = PULI_FACTORY_CLASS;
$factory = new $factoryClass();

$repo = $factory->createRepository();
$discovery = $factory->createDiscovery($repo);
$generator = $factory->createUrlGenerator($discovery);
echo $generator->generateUrl('/myapp/public/images/logo.png'); //will output /images/logo.png