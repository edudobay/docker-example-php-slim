<?php

require_once __DIR__ . '/vendor/autoload.php';

$app = new \Slim\App();

$app->get('/hello/{name}', function ($req, $res, $args) {
    $name = ucfirst($args['name']);
    $res->getBody()->write("hello $name!!");
    return $res;
});

$app->get('/foo', function ($req, $res, $args) {
    $res->getBody()->write('foo!!');
    return $res;
});

$app->run();
