<?php

session_start();
require '../app/core/init.php';

$request = new Request();
$app = new App();

$app->run($request);