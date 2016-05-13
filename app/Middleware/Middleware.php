<?php

namespace App\Middleware;


class Middleware{
	
	protected $container;

	//constructor takes in our container
	public function __contruct($container){
		//set container
		$this->container = $container;
	}
}
