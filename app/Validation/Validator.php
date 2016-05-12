<?php

namespace App\Validation;

use Respect\Validation\Validator as Respect;

class Validator{

	//create validate method
	public function validate($request, array $rules){
		var_dump('works');
	}

}
