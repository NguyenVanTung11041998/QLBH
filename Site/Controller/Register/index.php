<?php 
	$view = $controller.'/'.$action.'.php';
	
	$register = new register;
	
	$name = postInput('name');
	$email = postInput('email');
	$phone = postInput('phone');
	$address = postInput('address');
	$username = postInput('username');
	$password = postInput('password');
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$error = [];
		if(postInput('name') == '')
		{
			$error['name'] = 'Họ tên không được để trống!';
		}
		if(postInput('email') == '')
		{
			$error['email'] = 'Email ko đc để trống!';
		}
		else
		{
			$check_email = $register->check('Email', $email);
			if($check_email != NULL)
			{
				$error['email'] = 'Email đã tồn tại, mời bạn nhập email khác';
			}
		}
		if(postInput('username') == '')
		{
			$error['username'] = 'Tên đăng nhập không được để trống!';
		}
		else
		{
			$check_username = $register->check('TenDangNhap', $username);
			if($check_username != NULL)
			{
				$error['username'] = 'Tên đăng nhập đã tồn tại, mời bạn nhập lại';
			}
		}
		if(postInput('password') == '')
		{
			$error['password'] = 'Password ko đc để trống!';
		}
		else
		{
			$password = MD5(postInput('password'));
		}
		if(postInput('phone') == '')
		{
			$error['phone'] = 'Số điện thoại ko đc để trống!';
		}
		if(postInput('address') == '')
		{
			$error['address'] = 'Địa chỉ ko đc để trống!';
		}
		if(postInput('check_password') == '')
		{
			$error['check_password'] = "Nhập lại mật khẩu không được để trống";
		}
		else
		{
			if(md5(postInput('check_password')) != ($password))
			{
				$error['check_password'] = 'Mật khẩu không khớp, mời bạn nhập lại';
			}
		}
		if(empty($error))
		{
			$insert_user = $register -> insert($name, $email, $phone, $address, $username, $password);
			if($insert_user > 0)
			{
				$_SESSION['success'] = 'Đăng ký thành công. Mời bạn đăng nhập.';
				header("location: ?controller=Login");
			}
			else
			{
				echo "Đăng ký thất bại";
			}
		}
	}
?>