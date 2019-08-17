<?php 
	if(!isset($_SESSION['username']))
		header('Location: admin.php?controller=login');
	else
	{
		include("Admin/Model/DanhMucModel.php");

		$danhMucModel = new DanhMucModel;

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
					$tenDanhMuc = $_POST['txtTenDanhMuc'];
					$ketQua = $danhMucModel->Them($tenDanhMuc);
					if($ketQua)
						echo '<script>alert("Thêm thành công."); location.href="admin.php?controller=category";</script>';
					else
						echo "<script>alert('Thêm thất bại!');</script>";
				}
				require_once('Admin/View/Category/add.php');
				break;
			}
			case 'edit':
			{
				$id = $_GET['id'];
				$danhMuc = $danhMucModel->TimKiemTheoMa($id);
				if(isset($_POST['btnSua']))
				{
					$tenDanhMuc = $_POST['txtTenDanhMuc'];
					$ketQua = $danhMucModel->Sua($id, $tenDanhMuc);
					if($ketQua)
						echo '<script>alert("Sửa thành công."); location.href="admin.php?controller=category";</script>';
					else
						echo "<script>alert('Sửa thất bại!');</script>";
				}
				require_once('Admin/View/Category/edit.php');
				break;
			}
			case 'delete':
			{
				$id = $_GET['id'];
				$ketQua = $danhMucModel->Xoa($id);
				if($ketQua)
					echo '<script>alert("Xóa bản ghi thành công!"); location.href="admin.php?controller=category";</script>';
				else
					echo '<script>alert("Không thể xóa bản ghi! Đã tồn tại trong sản phẩm!"); location.href="admin.php?controller=category";</script>';
			}
			default:
			{
				if(isset($_GET['page']) && $_GET['page'] > 0)
					$page = $_GET['page'];
				else
					$page = 1;
				$listDanhMuc = $danhMucModel->LayDanhSach($page, 20);
				require_once('Admin/View/Category/index.php');
				break;
			}
		}
	}
?>


