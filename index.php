<?php 
	require_once 'System/config/path.php';
	$controller = isset($_GET['controller']) ? $_GET['controller'] : DEFAULT_CONTROLLER;
	$action = isset($_GET['action']) ? $_GET['action'] : DEFAULT_ACTION;
	require_once CONTROLLER_PATH.'index.php';
	
?>