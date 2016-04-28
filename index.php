<?php
require __DIR__ . ('/bootstrap/app.php');
$app->get('/', function(Request $request, Response $response) {
	return  $this->view->render($response, "home.twig");
});

$app->run();
