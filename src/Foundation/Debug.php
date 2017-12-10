<?php

namespace Mavision\Framework\Foundation;

use Symfony\Component\Debug\Debug as SymfonyDebug;

/**
* Detect Debugs
*/
class Debug extends SymfonyDebug
{
	
	public function __construct(){
		
		
	}



	public static function active($run=true){
		return ($run)?SymfonyDebug::enable():null;
	}
}