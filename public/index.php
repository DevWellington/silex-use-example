<?php

require_once "../vendor/autoload.php";

$app = new \Silex\Application();
$app['debug'] = true;

$data = array(
    'nome' => 'Silex',
    'version' => '1.0.*@dev'
);

$app->get('/', function() use($data){
   return "Welcome to {$data['nome']}! <br />-version: {$data['version']}";
});

$app->run();