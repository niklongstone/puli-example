<?php
require '../vendor/autoload.php';

use Puli\TwigExtension\PuliTemplateLoader;
use Puli\TwigExtension\PuliExtension;

$factoryClass = PULI_FACTORY_CLASS;
$factory = new $factoryClass();
$myRepo = $factory->createRepository();

$discovery = $factory->createDiscovery($myRepo);
$generator = $factory->createUrlGenerator($discovery);

$twig = new \Twig_Environment(new PuliTemplateLoader($myRepo));
$puliTwigExtension = new PuliExtension($myRepo, $generator);
$twig->addExtension($puliTwigExtension);

echo $twig->render('/myapp/views/index.html.twig');