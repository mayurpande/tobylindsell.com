<?php
//calls homecontroller index fn
$app->get('/','HomeController:index')->setName('home');

$app->get('/portfolio','PortfolioController:index')->setName('portfolio');

$app->get('/what-we-do','WhatWeDoController:index')->setName('what');

$app->get('/about-us','AboutUsController:index')->setName('about');

$app->get('/contact-us','ContactUsController:index')->setName('contact');

//$app->get('/admin','AuthController:getSignUp')->setName('auth.signup');

//$app->post('/admin','AuthController:postSignUp');

$app->get('/admin','AuthController:getSignIn')->setName('auth.signin');

$app->post('/admin','AuthController:postSignIn');

$app->get('/signout','AuthController:getSignOut')->setName('auth.signout');

$app->get('/admin-update-site','AdminController:getUpdateSite')->setName('admin.update');

$app->get('/admin-update-portfolio-1','AdminController:getPort1Update')->setName('adminPort.update');

$app->post('/admin-update-portfolio-1','AdminController:postPort1Update');

$app->get('/admin-update-portfolio-2','AdminController:getPort2Update')->setName('adminPort2.update');

$app->post('/admin-update-portfolio-2','AdminController:postPort2Update');

$app->get('/admin-update-news','AdminController:getNewsUpdate')->setName('adminNews.update');

$app->post('/admin-update-news','AdminController:postNewsUpdate');

$app->get('/admin-update-what-info-1','AdminController:getWhat1Update')->setName('adminWhat1.update');

$app->post('/admin-update-what-info-1','AdminController:postWhat1Update');

$app->get('/admin-update-what-info-2','AdminController:getWhat2Update')->setName('adminWhat2.update');

$app->post('/admin-update-what-info-2','AdminController:postWhat2Update');

$app->get('/admin-update-what-info-3','AdminController:getWhat3Update')->setName('adminWhat3.update');

$app->post('/admin-update-what-info-3','AdminController:postWhat3Update');

$app->get('/admin-update-what-info-4','AdminController:getWhat4Update')->setName('adminWhat4.update');

$app->post('/admin-update-what-info-4','AdminController:postWhat4Update');
