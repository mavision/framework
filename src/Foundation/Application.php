<?php

namespace Mavision\Framework\Foundation;

use Mavision\Framework\Foundation\Debug;
use Mavision\Framework\Http\Request;
use Mavision\Framework\Foundation\Kernel;

/**
* Create Application
*/
class Application
{
	/**
     * The framework version.
     */
    const VERSION = '1.0.0';	

    /**
     * The project base path
     */
	protected $basePath;	

    /**
     * The project app path
     */
	protected $appPath;

    /**
     * The project config path
     */
	protected $configPath;

    /**
     * The project public path
     */
	protected $publicPath;

    /**
     * The project web path
     */
	protected $webPath;

    /**
     * The requests data
     */
	protected $request;

	/**
     * Create a new application instance.
     *
     * @param  string  $basePath
     * @return void
     */
	public function __construct($basePath){

		$this->pathDetecter($basePath);
		$this->runDebug();
		$this->runRequest(); 
	}

    /**
     * Get application version
     *
     * @return string
     */
    public function version(){
    	
        return static::VERSION;
    }

    /**
     * Detect application paths
     *
     * @return void
     */
    public function pathDetecter($basePath){
    	
        $this->basePath 	= $basePath;
        $this->appPath  	= $basePath.DIRECTORY_SEPARATOR.'app';
        $this->configPath  	= $basePath.DIRECTORY_SEPARATOR.'config';
        $this->publicPath  	= $basePath.DIRECTORY_SEPARATOR.'public';
        $this->webPath  	= $basePath.DIRECTORY_SEPARATOR.'web';
    }

    /**
     * Run debug system
     *
     * @return void
     */
    public function runDebug(){
    	
        Debug::active();
    }

    /**
     * Run request system
     *
     * @return void
     */
    public function runRequest(){
    	
    	$this->request = Request::make();
    }





}