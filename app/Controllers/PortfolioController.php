<?php

namespace App\Controllers;

use App\Models\Port_Page
//necessary because we are passing slim views instance
use Slim\Views\Twig as View;

class PortfolioController extends Controller{
	

	public function index($request, $response){
	 //now we can use this view object and render the views
		//we now have access to our whole container because we have the container in our base controller
		$portPage = Port_Page::where('id',1)->first(); 
		return $this->view->render($response, 'portfolio.twig',array('portPage' => $portPage);
	}
}
