<?php

use App\Middleware\AuthMiddleware;
use App\Middleware\GuestMiddleware;

//calls homecontroller index fn
$app->get('/','HomeController:index')->setName('home');

$app->get('/portfolio','PortfolioController:index')->setName('portfolio');

$app->get('/what-we-do','WhatWeDoController:index')->setName('what');

$app->get('/about-us','AboutUsController:index')->setName('about');

$app->get('/contact-us','ContactUsController:index')->setName('contact');

$app->group('', function () {
    //comment out these two lines
    //$app->get('/admin','AuthController:getSignUp')->setName('auth.signup');

    //$app->post('/admin','AuthController:postSignUp');

    $this->get('/admin','AuthController:getSignIn')->setName('auth.signin');

    $this->post('/admin','AuthController:postSignIn');

})->add(new GuestMiddleware($container));





//create route group, then will place these routes in the route group


$app->group('', function () {

    $this->get('/signout','AuthController:getSignOut')->setName('auth.signout');

    $this->get('/admin-update-site','AdminController:getUpdateSite')->setName('admin.update');

    $this->get('/admin-update-portfolio-1','AdminController:getPort1Update')->setName('adminPort.update');

    $this->post('/admin-update-portfolio-1','AdminController:postPort1Update');

    $this->get('/admin-update-portfolio-2','AdminController:getPort2Update')->setName('adminPort2.update');

    $this->post('/admin-update-portfolio-2','AdminController:postPort2Update');

    $this->get('/admin-update-news','AdminController:getNewsUpdate')->setName('adminNews.update');

    $this->post('/admin-update-news','AdminController:postNewsUpdate');

    $this->get('/admin-update-what-url','AdminController:getWhatUrlUpdate')->setName('adminWhatUrl.update');

    $this->post('/admin-update-what-url','AdminController:postWhatUrlUpdate');

    $this->get('/admin-update-what-info-1','AdminController:getWhat1Update')->setName('adminWhat1.update');

    $this->post('/admin-update-what-info-1','AdminController:postWhat1Update');

    $this->get('/admin-update-what-info-2','AdminController:getWhat2Update')->setName('adminWhat2.update');

    $this->post('/admin-update-what-info-2','AdminController:postWhat2Update');

    $this->get('/admin-update-what-info-3','AdminController:getWhat3Update')->setName('adminWhat3.update');

    $this->post('/admin-update-what-info-3','AdminController:postWhat3Update');

    $this->get('/admin-update-what-info-4','AdminController:getWhat4Update')->setName('adminWhat4.update');

    $this->post('/admin-update-what-info-4','AdminController:postWhat4Update');

    $this->get('/admin-update-about','AdminController:getAboutUpdate')->setName('adminAbout.update');

    $this->post('/admin-update-about','AdminController:postAboutUpdate');
    
    $this->get('/admin-password-change','PasswordController:getChangePassword')->setName('auth.password.change');

    $this->post('/admin-password-change','PasswordController:postChangePassword');

    $this->get('/admin-upload-image','ImageController:getImageUpload')->setName('adminUpload.update');

    $this->post('/admin-upload-image','ImageController:postImageUpload');

})->add(new AuthMiddleware($container));


