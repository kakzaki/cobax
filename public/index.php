<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new FrameworkX\App();

$app->get('/', Acme\Todo\HelloController::class);
$app->get('/users/{name}', Acme\Todo\UserController::class);

$app->run();
