<?php 
	if(isset($_GET['controller']))
		$controller = $_GET['controller'];
	else
		$controller = '';

	switch ($controller) 
	{
		case 'login':
		{
			require_once('Site/Controller/Login/index.php');
			break;
		}
		case 'home':
		{
			require_once('Site/Controller/Home/index.php');
			break;
		}
		case 'register':
		{
			require_once('Site/Controller/Register/index.php');
			break;
		}
		case 'product':
		{
			require_once('Site/Controller/Product/index.php');
			break;
		}
		case 'single':
		{
			require_once('Site/Controller/Single/index.php');
			break;
		}
		case 'checkout':
		{
			require_once('Site/Controller/Checkout/index.php');
			break;
		}
		default:
		{
			require_once('Site/Controller/Home/index.php');
			break;
		}
	}
?>