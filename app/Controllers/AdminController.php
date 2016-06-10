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

	public function getPortUpdate($request,$response){
		return $this->view->render($response,'admin-portfolio.twig');
	}

	public function postPortUpdate($request,$response){
		

		$portfolio = Port_Page::where("id","1");
		$new_port_data = array(
			'port_img' => $request->getParam('port_img'),
			'port_para' => $request->getParam('port_Para')
		);
		$portfolio->fill($new_port_data);
		$portfolio->save();

		return $response->withRedirect($this->router->pathFor('admin.update'));
	}

}


