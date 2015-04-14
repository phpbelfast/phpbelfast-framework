<?php
require __DIR__ . '/vendor/autoload.php';

$app = new \Slim\Slim(array(
    'view' => new \Slim\Views\Twig(),
    'templates.path' => __DIR__ . '/views',
    //'mode' => 'test'
));
$app->view()->parserOptions = array(
    'debug' => true,
    'cache' => __DIR__ . '/tmp/compiled'
);
$app->view()->parserExtensions = array(
    new \Slim\Views\TwigExtension(),
);

require __DIR__ . '/config/database.php';

$app->container->set('postRepo', function(){
   return new \PhpBelfast\Repos\PostRepo();
});
$app->container->set('eventRepo', function(){
    return new \PhpBelfast\Repos\EventRepo();
});

$app->container->set('urlRepo', function(){
    return new \PhpBelfast\Repos\UrlRepo();
});

$app->container->set('convert', function(){
    return new \PhpBelfast\Utilities\Convert();
});