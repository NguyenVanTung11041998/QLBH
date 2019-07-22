<?php  
	include "Admin/Model/PhieuNhapModel.php";
	include "Admin/Model/SanPhamModel.php";

	$phieuNhapModel = new PhieuNhapModel;
	$sanPhamModel = new SanPhamModel;

	if(isset($_GET['action']))
		$action = $_GET['action'];
	else
		$action = '';

	switch ($action) 
	{
		case 'add':
		{
			$listSanPham = $sanPhamModel->LayDanhSach();
			require_once("Admin/View/ImportCoupon/add.php");
			break;
		}
		default:
		{
			$listPhieuNhap = $phieuNhapModel->LayDanhSach();

			require_once("Admin/View/ImportCoupon/index.php");
		}	
	}
?>