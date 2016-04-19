<?php
error_reporting(E_ALL ^ E_DEPRECATED);
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));
require ROOT . DS . 'includes' . DS . 'common.php';
require ROOT . DS . 'includes' . DS . 'connectdb.php';
$controller = empty($_GET['c']) ? 'Controlnews' : strtolower($_GET['c']);
	$method = empty($_GET['m']) ? 'loadhome' : strtolower($_GET['m']);
	if(file_exists(ROOT . DS . 'application/controllers' . DS . $controller . '.php'))
{
	require_once ROOT . DS . 'application/controllers' . DS . $controller . '.php';
	if(class_exists($controller))
	{
		$control = new $controller();
		if(method_exists($control,$method))
		{
			$control->{$method}();		
		}
	}
}
