<?php  
	include "Admin/Model/PhieuNhapModel.php";
	include "Admin/Model/SanPhamModel.php";
	include "Admin/Model/PhieuNhapChiTietModel.php";

	$phieuNhapModel = new PhieuNhapModel;
	$sanPhamModel = new SanPhamModel;
	$phieuNhapChiTietModel = new PhieuNhapChiTietModel;

	if(isset($_GET['action']))
		$action = $_GET['action'];
	else
		$action = '';

	switch ($action) 
	{
		case 'add':
		{
			$listSanPham = $sanPhamModel->LayDanhSach();
			if(isset($_POST['btnNhapHang']))
			{
				if(isset($_POST['txtNgayNhap']))
				{
					$ngayNhap = date('Y-m-d', strtotime($_POST['txtNgayNhap']));
					$ketQua = $phieuNhapModel->Them($ngayNhap);
					if($ketQua)
					{
						$phieuNhap = $phieuNhapModel->LayPhieuNhapCuoiCung();
						$maPN = $phieuNhap->GetMaPN();
						$count = (int)$_COOKIE['RowCount'];
						//echo "<script>console.log(".$count.")</script>";
						for($i = 0; $i < $count; $i++)
						{
							echo "<script>console.log(".$_POST["MaSP_".$i].")</script>";
							$maSP = $_POST["MaSP_".$i];
							$soLuongNhap = $_POST["SoLuongNhap_".$i];
							$donGiaNhap = $_POST["DonGiaNhap_".$i];
							$phieuNhapChiTietModel->Them($maPN, $maSP, $soLuongNhap, $donGiaNhap);
						}
						echo '<script>alert("Thêm hóa đơn thành công!"); location.href="admin.php?controller=import-coupon";</script>';
					}
					else
						echo '<script>alert("Thêm phiếu nhập thất bại!");</script>';
				}
				else
					echo '<script>alert("Bạn chưa chọn ngày!");</script>';
			}
			require_once("Admin/View/ImportCoupon/add.php");
			break;
		}
		default:
		{
			if(isset($_GET['page']) && $_GET['page'] > 0)
				$page = $_GET['page'];
			else
				$page = 1;

			$listPhieuNhap = $phieuNhapModel->LayDanhSach($page, 20);

			require_once("Admin/View/ImportCoupon/index.php");
		}	
	}
?>