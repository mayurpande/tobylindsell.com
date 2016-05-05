<?php

namespace App\Controllers;

//import model name
use App\Models\About_Us;

//necessary because we are passing slim views instance
use Slim\Views\Twig as View;

class AboutUsController extends Controller{
	

	public function index($request, $response){
	 //now we can use this view object and render the views
	//we now have access to our whole container because we have the container in our base controller 
		$about_us = About_Us::where('id',1)->first();
		return $this->view->render($response, 'about-us.twig',array('aboutUs' => $about_us));
	}
}
