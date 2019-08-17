<?php 
	if(!isset($_SESSION['username']))
		header('Location: admin.php?controller=login');
	else
		require_once('Admin/View/Statistical/index.php');
?>