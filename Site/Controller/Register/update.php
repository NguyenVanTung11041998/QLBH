<?php 
	$view = $controller.'/'.$action.'.php';
	
    $register = new register;
    $id = $_SESSION['user_id'];
    $user = $register->fetch_taikhoan($id);
	
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
            if(postInput('email')!=$user['Email'])
            {
                $check_email = $register->check('Email', $email);
                if($check_email != NULL)
                {
                    $error['email'] = 'Email đã tồn tại, mời bạn nhập email khác';
                }
            }
		}
		if(postInput('username') == '')
		{
			$error['username'] = 'Tên đăng nhập không được để trống!';
		}
		else
		{
            if(postInput('username')!=$user['TenDangNhap'])
            {
                $check_username = $register->check('TenDangNhap', $username);
                if($check_username != NULL)
                {
                    $error['username'] = 'Tên đăng nhập đã tồn tại, mời bạn nhập lại';
                }
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
            $update_user = $register->update($name, $email, $phone, $address, $username, $password, $id);
			if($update_user>0)
			{
				
				//echo "<script> if(confirm('Bạn có muốn chuyển sang trang đăng nhập không?')) {alert('Đăng nhập thành công'); location.href = '?controller=Home'; }</script>";
				echo "<script>alert('Sửa thành công'); location.href ='index.php'</script>";
			}
			else
			{
				echo "Sửa thất bại";
			}
		}
	}
?>