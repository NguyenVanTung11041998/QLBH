<?php 
	include "Admin/Model/NhaSanXuatModel.php";

	$nhaSanXuatModel = new NhaSanXuatModel;

	if(isset($_GET['action']))
		$action = $_GET['action'];
	else
		$action = '';

	switch ($action) 
	{
		case 'add':
		{
			if(isset($_POST['btnThem']))
			{
				$tenNSX = $_POST['txtTenNSX'];
				$thongTin = $_POST['txtThongTin'];
				$logo = "Upload/".$_FILES['txtLogo']['name'];
				$ketQua = $nhaSanXuatModel->Them($tenNSX, $thongTin, $logo);
				if($ketQua)
					echo '<script>alert("Thêm thành công."); location.href="admin.php?controller=producer";</script>';
				else
					echo "<script>alert('Thêm thất bại!');</script>";
			}
			require_once('Admin/View/Producer/add.php');
			break;
		}
		case 'edit':
		{
			$id = $_GET['id'];
			$nhaSanXuat = $nhaSanXuatModel->TimKiemTheoMa($id);
			if(isset($_POST['btnSua']))
			{
				$tenNSX = $_POST['txtTenNSX'];
				$thongTin = $_POST['txtThongTin'];
				if($_FILES['txtLogo']['name'])
					$logo = "Upload/".$_FILES['txtLogo']['name'];
				else
					$logo = $nhaSanXuat->GetLogo();
				$ketQua = $nhaSanXuatModel->Sua($id, $tenNSX, $thongTin, $logo);
				if($ketQua)
					echo '<script>alert("Sửa thành công."); location.href="admin.php?controller=producer";</script>';
				else
					echo "<script>alert('Sửa thất bại!');</script>";
			}
			require_once('Admin/View/Producer/edit.php');
			break;
		}
		case 'delete':
		{
			$id = $_GET['id'];
			$ketQua = $nhaSanXuatModel->Xoa($id);
			if($ketQua)
				echo '<script>alert("Xóa bản ghi thành công!"); location.href="admin.php?controller=producer";</script>';
			else
				echo '<script>alert("Không thể xóa bản ghi! Đã tồn tại trong sản phẩm!"); location.href="admin.php?controller=producer";</script>';
		}
		default:
		{
			$listNhaSanXuat = $nhaSanXuatModel->LayDanhSach();
			require_once('Admin/View/Producer/index.php');
			break;
		}
	}
?>