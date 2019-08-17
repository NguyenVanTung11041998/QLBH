<?php 
	include("Admin/Model/AdminModel.php");
	if(isset($_POST['btnLogin']))
	{
		$taiKhoan = $_POST['txtTaiKhoan'];
		$matKhau = $_POST['txtMatKhau'];
		$adminModel = new AdminModel;
		$admin = $adminModel->KiemTraDangNhap($taiKhoan, $matKhau);

		if($admin)
		{
			$remember = 0;
			if(!empty(isset($_POST['remember_me'])))
				$remember = 1;

			if($remember == 1)
			{
				setcookie('username', $taiKhoan, time() + 3600 * 24 * 30, '/', '', 0, 0);
				setcookie('password', $matKhau, time() + 3600 * 24 * 30, '/', '', 0, 0);
			}
			$_SESSION['username'] = $taiKhoan;
			echo '<script>alert("Đăng nhập thành công."); location.href="admin.php?controller=product";</script>';
		}
		else
			echo "<script>alert('Sai tài khoản hoặc mật khẩu!')</script>";
	}

	require_once('Admin/View/Login/index.php');
?>