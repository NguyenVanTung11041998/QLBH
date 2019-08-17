<?php 
	if(!isset($_SESSION['username']))
		header('Location: admin.php?controller=login');
	else
	{
		include "Admin/Model/PhieuNhapChiTietModel.php";
		$phieuNhapChiTietModel = new PhieuNhapChiTietModel;

		if(isset($_GET['page']) && $_GET['page'] > 0)
			$page = $_GET['page'];
		else
			$page = 1;

		if(isset($_GET['id']))
		{
			$maPN = $_GET['id'];
			$listPhieuNhapChiTiet = $phieuNhapChiTietModel->LayDanhSachHoaDonChiTietTheoMaPN($maPN, $page, 20);
		}
		else
			$listPhieuNhapChiTiet = array();
		
		require_once('Admin/View/CouponInfo/index.php');
	}
?>