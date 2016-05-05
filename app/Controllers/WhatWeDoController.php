<?php

namespace App\Controllers;

//import model name
use App\Models\What_We_Do;

//necessary because we are passing slim views instance
use Slim\Views\Twig as View;

class WhatWeDoController extends Controller{
	

	public function index($request, $response){
	 //now we can use this view object and render the views
	//we now have access to our whole container because we have the container in our base controller 
		$what_page = What_We_Do::where('id',1)->first();
		return $this->view->render($response, 'what-we-do.twig',array('whatPage' => $what_page));
	}
}
