<?php 
	if(isset($_GET['action']))
		$action = $_GET['action'];
	else
		$action = '';

	switch ($action) {
		case 'index':
		{
			require_once('Site/View/Login/index.php');
			break;
		}

		default:
		{
			require_once('Site/View/Login/index.php');
			break;
		}
	}
?>