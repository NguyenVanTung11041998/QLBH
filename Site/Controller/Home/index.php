<?php 
	$home = new home;
	$pro_new = $home -> fetchSql();
	//_debug($pro_new);
	$view = $controller.'/'.$action.'.php';
?>