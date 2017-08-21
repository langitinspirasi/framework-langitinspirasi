<?php
	/**
     * @Author  : Langit Inspirasi <web@langitinspirasi.co.id>
     * @Date    : 26/05/17 - 3:06 AM
	 * @Phone   : 0856-2555-665
	 *
	 * @Warning : Please don't delete this notes !
    */
	
	session_start();
	
	//define configuration
	define('ROOT', dirname(__FILE__));
	define('LIF', DIRECTORY_SEPARATOR);
	
	//include file library
	require_once"library/configuration.php";   //first time using Langit Inspirasi Framework please set this configuration
	require_once"library/database.class.php";  //class databases for your website
	require_once"library/model.class.php";     //class model for your website
	require_once"library/view.class.php";      //class view for your website
	require_once"library/controller.class.php";//class controller for your website
	
	function __autoload($className){
		$fileName = str_replace("\\", LIF, $className).'.php';
		if(!file_exists($fileName)){
			return false;
		}
		include $fileName;
	}
	
	//this create with MVC
	$hal = (isset($_GET['hal']) && $_GET['hal']) ? $_GET['hal']: 'home';
	$controller = ROOT.LIF.'controllers'.LIF.$hal.'Controller.php';
	
	if(file_exists($controller)){
		require_once $controller;
		$action = (isset($_GET['action']) && $_GET['action']) ? $_GET['action']: 'index';
		$controllerName = ucfirst($hal).'Controller';
		$obj = new $controllerName();
		
		if(method_exists($obj,$action)){
			$args = array();
			if(count($_GET) > 2){
				$parts = array_slice($_GET, 2);
				foreach($parts as $part){
					array_push($args, $part);
				}
			}
			call_user_func_array(array($obj, $action), $args);
			
		}
		else
			die('Action not found ');
		
	}
	else
		die('Action not found ');
	
?>