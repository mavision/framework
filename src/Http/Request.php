<?php

namespace Mavision\Framework\Http;

use Symfony\Component\HttpFoundation\Request as SymfonyRequest;

/**
* Create request system
*/
class Request extends SymfonyRequest
{
	
	public function __construct(){
		
	}

	/**
     * Make a new HTTP request from server variables.
     *
     * @return static
     */
	public static function make(){

		return static::createFromBase(SymfonyRequest::createFromGlobals());
	}

	/**
     * Create request from a Symfony instance.
     *
     * @param  \Symfony\Component\HttpFoundation\Request  $request
     * @return \Http\Request
     */
    public static function createFromBase(SymfonyRequest $request){ 

  		return static::reorganization($request);
    } 

	/**
     * Reorganization request data
     *
     * @param  \Symfony\Component\HttpFoundation\Request  $request
     * @return \Http\Request
     */
    public static function reorganization($request){ 
    	$request->method 	= $request->getMethod();
    	$request->baseUrl 	= $request->getBaseUrl();
    	$request->basePath 	= $request->getBasePath();
    	$request->pathInfo 	= $request->getPathInfo(); 
    	$request->json 		= (new static)->json();
  		return $request;
    } 


    public function json(){
    	return null;
    }


}