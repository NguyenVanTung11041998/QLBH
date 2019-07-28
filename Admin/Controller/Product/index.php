<?php 
	include "Admin/Model/SanPhamModel.php";
	include "Admin/Model/NhaCungCapModel.php";
	include "Admin/Model/NhaSanXuatModel.php";
	include "Admin/Model/LoaiSanPhamModel.php";
	include "System/config/path.php";

	$sanPhamModel = new SanPhamModel;
	$nhaCungCapModel = new NhaCungCapModel;
	$nhaSanXuatModel = new NhaSanXuatModel;
	$loaiSanPhamModel = new LoaiSanPhamModel;

	if(isset($_GET['action']))
		$action = $_GET['action'];
	else
		$action = '';

	switch ($action) 
	{
		case 'add':
		{
			$listNhaCungCap = $nhaCungCapModel->LayDanhSach();
			$listNhaSanXuat = $nhaSanXuatModel->LayDanhSach();
			$listLoaiSanPham = $loaiSanPhamModel->LayDanhSach();
			if(isset($_POST['btnThem']))
			{
				$tenSP = $_POST['txtTenSP'];
				$donGia = (float)$_POST['txtDonGia'];
				$moTa = $_POST['txtMoTa'];
				//$hinhAnh = "Upload/".$_FILES['txtHinhAnh']['name'];
				$soLuongTon = 0;
				$moi = 0;
				if(isset($_FILES['txtHinhAnh']))
				{
					$file_name = $_FILES['txtHinhAnh']['name'];
					$file_tmp = $_FILES['txtHinhAnh']['tmp_name'];
					$file_type = $_FILES['txtHinhAnh']['type'];
					$file_error = $_FILES['txtHinhAnh']['error'];

					if($file_error == 0)
					{
						$part = ROOT ."product/";
						$hinhAnh = $file_name;
					}
				} 

				if(!empty(isset($_POST['ckbMoi'])))
					$moi = 1;

				$maNCC = $_POST['cmbMaNCC'];
				$maNSX = $_POST['cmbMaNSX'];
				$maLoaiSP = $_POST['cmbMaLoaiSP'];
				$ketQua = $sanPhamModel->Them($tenSP, $donGia, $moTa, $hinhAnh, $soLuongTon, $moi, $maNCC, $maNSX, $maLoaiSP);
				if($ketQua)
				{
					move_uploaded_file($file_tmp, $part.$file_name);
					echo '<script>alert("Thêm thành công."); location.href="admin.php?controller=product";</script>';
				}
					
				else
					echo "<script>alert('Thêm thất bại!');</script>";
			}
			require_once('Admin/View/Product/add.php');
			break;
		}
		case 'edit':
		{
			$listNhaCungCap = $nhaCungCapModel->LayDanhSach();
			$listNhaSanXuat = $nhaSanXuatModel->LayDanhSach();
			$listLoaiSanPham = $loaiSanPhamModel->LayDanhSach();

			$id = $_GET['id'];
			$sanPham = $sanPhamModel->TimKiemTheoMa($id);

			if(isset($_POST['btnSua']))
			{
				$tenSP = $_POST['txtTenSP'];
				$donGia = (float)$_POST['txtDonGia'];
				$moTa = $_POST['txtMoTa'];

				// if($_FILES['txtHinhAnh']['name'])
				// 	$hinhAnh = "Upload/".$_FILES['txtHinhAnh']['name'];
				if(isset($_FILES['txtHinhAnh']))
				{
					$file_name = $_FILES['txtHinhAnh']['name'];
					$file_tmp = $_FILES['txtHinhAnh']['tmp_name'];
					$file_type = $_FILES['txtHinhAnh']['type'];
					$file_error = $_FILES['txtHinhAnh']['error'];

					if($file_error == 0)
					{
						$part = ROOT ."product/";
						$hinhAnh = $file_name;
					}
				} 
				else
					$hinhAnh = $sanPham->GetHinhAnh();
				$soLuongTon = (int)$_POST['txtSoLuongTon'];
				
				$moi = 0;
				if(!empty(isset($_POST['ckbMoi'])))
					$moi = 1;

				$maNCC = $_POST['cmbMaNCC'];
				$maNSX = $_POST['cmbMaNSX'];
				$maLoaiSP = $_POST['cmbMaLoaiSP'];

				$daXoa = 0;
				if(!empty(isset($_POST['ckbXoa'])))
					$daXoa = 1;

				$ketQua = $sanPhamModel->Sua($id, $tenSP, $donGia, $moTa, $hinhAnh, $soLuongTon, $moi, $maNCC, $maNSX, $maLoaiSP, $daXoa);
				if($ketQua)
				{
					move_uploaded_file($file_tmp, $part.$file_name);
					echo '<script>alert("Sửa thành công."); location.href="admin.php?controller=product";</script>';
				}
					
				else
					echo "<script>alert('Sửa thất bại!');</script>";
			}

			require_once('Admin/View/Product/edit.php');
			break;
		}
		case 'delete':
		{
			$id = $_GET['id'];
			$ketQua = $sanPhamModel->Xoa($id);
			if($ketQua)
				echo '<script>alert("Xóa bản ghi thành công!"); location.href="admin.php?controller=product";</script>';
			else
				echo '<script>alert("Không thể xóa bản ghi!"); location.href="admin.php?controller=product";</script>';
		}
		default:
		{
			if(isset($_GET['page']) && $_GET['page'] > 0)
				$page = $_GET['page'];
			else
				$page = 1;
			$listSanPham = $sanPhamModel->LayDanhSach($page, 20);
			require_once('Admin/View/Product/index.php');
			break;
		}
	}
?>