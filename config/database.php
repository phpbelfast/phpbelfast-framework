<?php
// use Illuminate\Database\Capsule\Manager as DB;
class_alias('Illuminate\Database\Capsule\Manager', 'DB');

// Database information
$settings = [
    'mysql' => [
        'driver' => 'mysql',
        'host' => '127.0.0.1',
        'database' => $app->config('mode') == 'test' ? 'phpbelfast_test' : 'phpbelfast',
        'username' => 'demo',
        'password' => 'demo',
        'charset' => 'utf8',
        'collation' => 'utf8_general_ci',
        'prefix' => ''
    ],
    'sqlite' => [
        'driver'   => 'sqlite',
        'database' => __DIR__.'/../tmp/database.sqlite',
        'prefix'   => '',
    ],
];
$capsule = new DB;
$capsule->addConnection($settings['sqlite']);
$capsule->setFetchMode(PDO::FETCH_OBJ);
$capsule->setAsGlobal();
$capsule->bootEloquent();
