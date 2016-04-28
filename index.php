<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require __DIR__ . '/vendor/autoload.php';
date_default_timezone_set ( "Europe/London" );

$app = new \Slim\App;

$app->get('/', function(Request $request, Response $response) {
	$response = $this->view->render($response, "home.html");

	return $response;
});

$app->run();
