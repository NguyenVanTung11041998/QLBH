<?php 
	if(isset($_GET['action']))
		$action = $_GET['action'];
	else
		$action = '';

	switch ($action) 
	{
		default:
		{
			require_once('Admin/View/BillInfo/index.php');
			break;
		}
	}
?>
