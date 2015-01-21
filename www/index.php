<?php
require '../vendor/autoload.php';

$app = new \Slim\Slim();
$api = new \app\Api();

$api->registerRoutes($app);

$app->run();