<?php 
	include "Admin/Model/NhaCungCapModel.php";

	$nhaCungCapModel = new NhaCungCapModel;

	if(isset($_GET['action']))
		$action = $_GET['action'];
	else
		$action = '';

	switch ($action) {
		case 'add':
		{
			if(isset($_POST['btnThem']))
			{
				$tenNCC = $_POST['txtTenNCC'];
				$diaChi = $_POST['txtDiaChi'];
				$soDT = $_POST['txtSoDT'];
				$email = $_POST['txtEmail'];
				$ketQua = $nhaCungCapModel->Them($tenNCC, $diaChi, $soDT, $email);
				if($ketQua)
					echo '<script>alert("Thêm thành công."); location.href="admin.php?controller=supplier";</script>';
				else
					echo "<script>alert('Thêm thất bại!');</script>";
			}
			require_once('Admin/View/Supplier/add.php');
			break;
		}
		case 'edit':
		{
			$id = $_GET['id'];
			$nhaCungCap = $nhaCungCapModel->TimKiemTheoMa($id);
			if(isset($_POST['btnSua']))
			{
				$tenNCC = $_POST['txtTenNCC'];
				$diaChi = $_POST['txtDiaChi'];
				$soDT = $_POST['txtSoDT'];
				$email = $_POST['txtEmail'];
				$ketQua = $nhaCungCapModel->Sua($id, $tenNCC, $diaChi, $soDT, $email);
				if($ketQua)
					echo '<script>alert("Sửa thành công."); location.href="admin.php?controller=supplier";</script>';
				else
					echo "<script>alert('Sửa thất bại!');</script>";
			}
			require_once('Admin/View/Supplier/edit.php');
			break;
		}
		case 'delete':
		{
			$id = $_GET['id'];
			$ketQua = $nhaCungCapModel->Xoa($id);
			if($ketQua)
				echo '<script>alert("Xóa bản ghi thành công!"); location.href="admin.php?controller=supplier";</script>';
			else
				echo '<script>alert("Không thể xóa bản ghi! Đã tồn tại trong sản phẩm!"); location.href="admin.php?controller=supplier";</script>';
		}
		
		default:
		{
			if(isset($_GET['page']) && $_GET['page'] > 0)
				$page = $_GET['page'];
			else
				$page = 1;
			$listNhaCungCap = $nhaCungCapModel->LayDanhSach($page, 20);
			require_once('Admin/View/Supplier/index.php');
			break;
		}
	}
?>