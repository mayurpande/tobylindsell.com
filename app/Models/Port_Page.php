<?php

namespace App\Models;

//we need to extend models eloquent's class
use Illuminate\Database\Eloquent\Model;



class Port_Page extends Model{
//by doing this we now have the ability to use this class as a direct connection to our db table

	//eloquent takes the singular version of the class name and it will automatically look for a table
	//with the plural version. If your table differs we can explicitly name it like below
	protected $table = 'porfolio';
	
	protected $fillable = [
		'port_img',
		'port_para',
	];

}
