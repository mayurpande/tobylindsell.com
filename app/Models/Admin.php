<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Admin extends Model{

	protected $table = 'admin';

	//specifically tell eloquent what we are writing to
	protected $fillable = [
		'email',
		'name',
		'password',
	];

}
