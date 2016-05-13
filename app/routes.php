<?php
//calls homecontroller index fn
$app->get('/','HomeController:index')->setName('home');

$app->get('/portfolio','PortfolioController:index')->setName('portfolio');

$app->get('/what-we-do','WhatWeDoController:index')->setName('what');

$app->get('/about-us','AboutUsController:index')->setName('about');

$app->get('/contact-us','ContactUsController:index')->setName('contact');

$app->get('/admin','AuthController:getSignUp')->setName('auth.signup');

$app->post('/admin','AuthController:postSignUp');
