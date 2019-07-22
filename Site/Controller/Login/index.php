<?php 
	$view = $controller.'/'.$action.'.php';
	$login = new login;

	$username = postInput('username');
	$password = postInput('password');
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if(postInput('username') == '')
		{
			$error['username'] = 'Tên đăng nhập không được để trống';
		}
		if(postInput('password') == '')
		{
			$error['password'] = 'Mật khẩu không được để trống';
		}
		if(empty($error))
		{
			$is_check = $login -> fetchuser($username, md5($password));
			if($is_check != NULL)
			{
				$_SESSION['name_user'] = $is_check['HoTen'];
				$_SESSION['id_user'] = $is_check['ID'];
				echo "<script>alert('Đăng nhập thành công'); location.href = '?controller=Home'</script>";
			}
			else{
				$_SESSION['error'] = "Đăng nhập thất bại";
			}
		}
	}
?>