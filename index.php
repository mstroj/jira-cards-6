<?php

/**
 * get controller and action
 */
$controllerName = isset($_POST["c"]) ? $_POST["c"] : "cards";
$actionName = isset($_POST["a"]) ? $_POST["a"] : "index";

/**
 * config
 */
if( !file_exists('config.json') ) die("Config file not found.");
$config = json_decode(file_get_contents('config.json'), true);

/**
 * do we have this controller? get and create object
 */
$appPath = dirname(__FILE__)."/app";
$controllerPath = $appPath."/Controller/".ucfirst($controllerName)."Controller.php";
$controllerClass = ucfirst($controllerName)."Controller";
if(!file_exists($controllerPath)) die("Controller ".ucfirst($controllerName)." not found.");
require_once($controllerPath);
if(!class_exists($controllerClass)) die("Class ".$controllerClass." not found.");

/**
 * do we have an action?
 */
$controller = new $controllerClass($_GET, $_POST, $config);
if( !method_exists($controller, $actionName) ) die("Action ".$actionName." not found.");
$viewVars = $controller->$actionName();

/**
 * load view based on controller and action and pass view Vars
 */
$viewPath = $appPath."/Views/".ucfirst($controllerName)."/".$actionName.".php";
$renderCall = function ($viewPath, $viewVars) {
	if(is_array($viewVars)) {
		extract($viewVars);
	}

	ob_start();
	require_once($viewPath);
	$content = ob_get_contents();
	ob_end_clean();
	return $content;
};
$content = $renderCall($viewPath, $viewVars);

/**
 * put content in view
 */
require_once($appPath."/Views/Layouts/default.php");
