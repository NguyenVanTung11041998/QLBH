<?php
	session_start(); 
	include "System/library/database.php";
	if(isset($_GET['controller']))
		$controller = $_GET['controller'];
	else
		$controller = '';

	switch ($controller) 
	{
		case 'login':
		{
			require_once('Admin/Controller/Login/index.php');
			break;
		}
		case 'supplier':
		{
			require_once('Admin/Controller/Supplier/index.php');
			break;
		}
		case 'category':
		{
			require_once('Admin/Controller/Category/index.php');
			break;
		}
		case 'category-product':
		{
			require_once('Admin/Controller/CategoryProduct/index.php');
			break;
		}
		case 'product':
		{
			require_once('Admin/Controller/Product/index.php');
			break;	
		}
		case 'producer':
		{
			require_once('Admin/Controller/Producer/index.php');
			break;	
		}
		case 'bill':
		{
			require_once('Admin/Controller/Bill/index.php');
			break;
		}
		case 'bill-info':
		{
			require_once('Admin/Controller/BillInfo/index.php');
			break;
		}
		case 'customer':
		{
			require_once('Admin/Controller/Customer/index.php');
			break;
		}
		case 'import-coupon':
		{
			require_once('Admin/Controller/ImportCoupon/index.php');
			break;
		}
		case 'coupon-info':
		{
			require_once('Admin/Controller/CouponInfo/index.php');
			break;
		}
		case 'statistical':
		{
			require_once('Admin/Controller/Statistical/index.php');
			break;
		}
		default:
		{
			require_once('Admin/Controller/Login/index.php');
			break;
		}
	}
?>