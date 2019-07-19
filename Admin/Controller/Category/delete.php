<?php 
	include "../../../System/library/database.php";
	$dbConfig = new DBConfig;
	$output = '';

	$id = $_POST['id'];
	$query = "Delete from DanhMuc WHERE MaDanhMuc = $id";

	$ketQua = $dbConfig->ExecuteQuery($query);

	if($ketQua)
		echo $id;
	else
		echo "";
?>