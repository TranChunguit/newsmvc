<?php

session_start();
require 'application/models/modelnews.php';
	function model($model) {
    static $models = array();
    $model = strtolower($model);
    if (!isset($models[$model])) {
        include ROOT . DS . 'application/models' . DS . $model . '.php';
        
        $model_name = ucfirst($model);
        $models[$model] = new $model_name();
    }
    
    return $models[$model];
}

function loadheader($header)
{
	include ROOT . DS . 'application/views' . DS . $header;  
}
function render($file, $data) {
		extract($data);
    ob_start();
		include ROOT . DS . 'application/views' . DS . $file;   
		ob_end_flush();  
	}	 	
function isPostRequest() {
    return (strtolower($_SERVER['REQUEST_METHOD']) == 'post');
}
function redirect($to_url) {
    header('Location: ' . $to_url);
    exit();
}
