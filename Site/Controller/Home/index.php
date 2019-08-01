<?php 
	$home = new home;
	$pro_new = $home -> fetchSql();
	$pro_hot = $home -> fetch_sphot();
	//_debug($pro_new);
	$view = $controller.'/'.$action.'.php';
?>