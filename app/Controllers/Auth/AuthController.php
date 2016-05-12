<?php

namespace App\Controllers\Auth;

use App\Controllers\Controller;

class AuthController extends Controller{
	
	public function getSignIn($request,$response){
		
		return $this->view->render($response, 'auth/admin-login.twig');
	
	}

	public function postSignIn(){
		
	
	}	
}

