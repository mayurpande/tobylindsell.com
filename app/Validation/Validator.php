<?php

namespace App\Validation;

use Respect\Validation\Validator as Respect;

//used for error checking see try catch block below
use Respect\Validation\Exceptions\NestedValidationException;

class Validator{

	protected $errors;

	//create validate method
	public function validate($request, array $rules){
		/* We have an array of rules that we can iterate through
		 * so each one of these attributes will check that each
		 * one of these are in fact valid. Or rather they don't fail
		 *
		 * So to do this of course all we need to do is go and loop through 
		 * them. We want to pick up the index of these as well and that's 
		 * just the field name
		 *
		 * Now what we can do is assert that this does not fail (assert that
		 * its true) and we can pass in the actual field because we have this in the 
		 * request object 
		 */

		foreach($rules as $field => $rule){

			try{

				//helps pulling back error messages
				$rule->setName(ucfirst($field))->assert($request->getParam($field));

			}catch(NestedValidationException $e){

				//append to error list see property. we pass in field var here to keep track
				//getMessages because there could be more than one assertion fail
				$this->errors[$field] = $e->getMessages();

				var_dump($this->errors);
				die();
			}
		}
	}

}
