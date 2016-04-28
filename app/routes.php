<?php
$app->get('/', function(Request $request, Response $response) {
	return  $this->view->render($response, "home.twig");
});


