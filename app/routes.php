<?php
//calls homecontroller index fn
$app->get('/','HomeController:index')->setName('home');

$app->get('/portfolio','PortfolioController:index')->setName('portfolio');


