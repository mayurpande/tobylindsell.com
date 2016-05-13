<?php

namespace App\Controllers\Auth;

use App\Controllers\Controller;

//import validator
use Respect\Validation\Validator as v;

class AuthController extends Controller{

	//fn to render login page for admin
	public function getSignIn($request,$response){
		
		return $this->view->render($response, 'auth/admin-login.twig');
	
	}

	//fn for post login, this will be passed over to the validate method in the validator class
	public function postSignIn(){

		//here we use the validation object. here we also have an array of rules
		//in this case email and password need to be available, 
		$validation = $this->validator->validate($request, [
			//for the data provided, for this form input, we want no white space and we don't want
			//this to be empty, 
			'email' => v::noWhitespace()->notEmpty(),
			'name' => v::notEmpty()->alpha();
			'password' => v::noWhitespace()->notEmpty(),

		]);		

		$admin = Admin::create([
			'email' => $request->getParam('email'),
			'name' => $request->getParam('name'),
			'password' => password_hash($request->getParam('password'),PASSWORD_DEFAULT),
		]};
	
	}	
}

