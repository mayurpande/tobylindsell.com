<?php

namespace App\Controllers\Auth;

use App\Controllers\Controller;

//import validator
use Respect\Validation\Validator as v;

class AdminController extends Controller{
	
	public function getUpdateSite($request,$response){
		return $this->view->render($response,'admin.twig');
	}

}


