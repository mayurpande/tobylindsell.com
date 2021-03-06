<?php

namespace App\Models;

//we need to extend models eloquent's class
use Illuminate\Database\Eloquent\Model;



class What_We_Do_Info extends Model{
//by doing this we now have the ability to use this class as a direct connection to our db table

	//eloquent takes the singular version of the class name and it will automatically look for a table
	//with the plural version. If your table differs we can explicitly name it like below
	protected $table = 'what_page_info';

	protected $fillable = [
		'heading',
		'para1',
		'para2',
		'sub_heading',
		'sub_para',
		'sub_heading2',
		'sub_para2',
	];
}
