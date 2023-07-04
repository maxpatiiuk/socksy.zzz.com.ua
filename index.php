<?php

define('ROOT', __DIR__ . DIRECTORY_SEPARATOR);

spl_autoload_register(function($class_name) {

	if(substr($class_name, 0, 3) == "Api")
		$class_name = "Api";

	if(file_exists(ROOT .$class_name . '.php')) {
		require_once(ROOT . $class_name . '.php');
		return true;
	}
	return false;
});

$router = new Router();