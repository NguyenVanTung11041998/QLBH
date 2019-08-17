<?php 
	if(!isset($_SESSION['username']))
		header('Location: admin.php?controller=login');
	else
	{
		include("Admin/Model/LoaiSanPhamModel.php");
		include "Admin/Model/DanhMucModel.php";

		$danhMucModel = new DanhMucModel;
		$loaiSanPhamModel = new LoaiSanPhamModel;

		if(isset($_GET['action']))
			$action = $_GET['action'];
		else
			$action = '';

		switch ($action) 
		{
			case 'add':
			{
				$listDanhMuc = $danhMucModel->LayDanhSach();
				if(isset($_POST['btnThem']))
				{
					$tenLoai = $_POST['txtTenLoaiSP'];
					$maDanhMuc = $_POST['cmbMaDanhMuc'];
					$ketQua = $loaiSanPhamModel->Them($tenLoai, $maDanhMuc);
					if($ketQua)
						echo '<script>alert("Thêm thành công."); location.href="admin.php?controller=category-product";</script>';
					else
						echo "<script>alert('Thêm thất bại!');</script>";
				}
				require_once('Admin/View/CategoryProduct/add.php');
				break;
			}
			case 'edit':
			{
				$id = $_GET['id'];
				$loaiSanPham = $loaiSanPhamModel->TimKiemTheoMa($id);
				$listDanhMuc = $danhMucModel->LayDanhSach();
				if(isset($_POST['btnSua']))
				{
					$tenLoai = $_POST['txtTenLoaiSP'];
					$maDanhMuc = $_POST['cmbMaDanhMuc'];
					$ketQua = $loaiSanPhamModel->Sua($id, $tenLoai, $maDanhMuc);
					if($ketQua)
						echo '<script>alert("Sửa thành công."); location.href="admin.php?controller=category-product";</script>';
					else
						echo "<script>alert('Sửa thất bại!');</script>";
				}
				require_once('Admin/View/CategoryProduct/edit.php');
				break;
			}
			case 'delete':
			{
				$id = $_GET['id'];
				$ketQua = $loaiSanPhamModel->Xoa($id);
				if($ketQua)
					echo '<script>alert("Xóa bản ghi thành công!"); location.href="admin.php?controller=category-product";</script>';
				else
					echo '<script>alert("Không thể xóa bản ghi! Đã tồn tại trong sản phẩm!"); location.href="admin.php?controller=category-product";</script>';
			}
			default:
			{
				if(isset($_GET['page']) && $_GET['page'])
					$page = $_GET['page'];
				else
					$page = 1;
				$listLoaiSP = $loaiSanPhamModel->LayDanhSach($page, 20);
				require_once('Admin/View/CategoryProduct/index.php');
				break;
			}
		}
	}
?>


