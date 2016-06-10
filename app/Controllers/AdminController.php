<?php

namespace App\Controllers;

use App\Models\Port_Page;
use App\Controllers\Controller;

//import validator
use Respect\Validation\Validator as v;

class AdminController extends Controller{
	
	public function getUpdateSite($request,$response){
		return $this->view->render($response,'admin.twig');
	}

	public function getPort1Update($request,$response){
		return $this->view->render($response,'admin-portfolio.twig');
	}

	public function postPort1Update($request,$response){
		

		$portfolio = Port_Page::where("id","1")->first();
		$new_port_data = array(
			'port_img' => $request->getParam('port_img'),
			'port_para' => $request->getParam('port_para')
		);
		$portfolio->fill($new_port_data);
		$portfolio->save();

		return $response->withRedirect($this->router->pathFor('admin.update'));
	}

	public function getPort2Update($request,$response){
		return $this->view->render($response,'admin-portfolio2.twig');
	}

	public function postPort2Update($request,$response){
		

		$portfolio = Port_Page::where("id","2")->first();
		$new_port_data = array(
			'port_img' => $request->getParam('port_img'),
			'port_para' => $request->getParam('port_para')
		);
		$portfolio->fill($new_port_data);
		$portfolio->save();

		return $response->withRedirect($this->router->pathFor('admin.update'));
	}

	public function getNewsUpdate($request,$response){
		return $this->view->render($response,'admin-news.twig');
	}

	public function postNewsUpdate($request,$response){
		

		$portfolio = Port_Page::where("id","1")->first();
		$new_port_data = array(
			'home_img' => $request->getParam('home_img'),
			'home_para' => $request->getParam('home_para')
		);
		$portfolio->fill($new_port_data);
		$portfolio->save();

		return $response->withRedirect($this->router->pathFor('admin.update'));
	}


}


