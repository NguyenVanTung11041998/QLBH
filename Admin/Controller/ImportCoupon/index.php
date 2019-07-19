<?php  
	include "Admin/Model/PhieuNhapModel.php";

	$phieuNhapModel = new PhieuNhapModel;

	$listPhieuNhap = $phieuNhapModel->LayDanhSach();

	require_once("Admin/View/ImportCoupon/index.php");
?>