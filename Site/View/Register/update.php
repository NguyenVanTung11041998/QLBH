
<!--content-->
<div class=" container">
	<div class=" register">
		<h1>Sửa thông tin tài khoản</h1>
		<form method="POST"> 
			<div class="col-md-6 register-top-grid">
				<h3>Thông tin cá nhân</h3>
				<div>
					<span>Họ tên</span>
					<input type="text" name="name" placeholder="Họ tên" value="<?php echo $user['HoTen']?>">
					<?php if (isset($error['name'])): ?>
            				<p class="text-danger"><?php echo $error['name']; ?></p>
            		<?php endif ?>
				</div>
				<div>
					<span>Email</span>
					<input type="text" name="email" placeholder="Email" value="<?php echo $user['Email']?>"> 
					<?php if (isset($error['email'])): ?>
            				<p class="text-danger"><?php echo $error['email']; ?></p>
            		<?php endif ?>
				</div>
				<div>
					<span>Số điện thoại</span>
					<input type="text" name="phone" placeholder="Số điện thoại" value="<?php echo $user['SoDT']?>"> 
					<?php if(isset($error['phone'])): ?>
						<p class="text-danger"><?php echo $error['phone']; ?></p>
					<?php endif ?>
				</div>
				<div>
					<span>Địa chỉ</span>
					<input type="text" name="address" placeholder="Địa chỉ" value="<?php echo $user['DiaChi']?>">
					<?php if(isset($error['address'])): ?>
						<p class="text-danger"><?php echo $error['address']; ?></p>
					<?php endif ?> 
				</div>
				
			</div>
			<div class="col-md-6 register-bottom-grid">
				<h3>Thông tin tài khoản</h3>
				<div>
					<span>Tên đăng nhập</span>
					<input type="text" name="username" placeholder="Tên đăng nhập" value="<?php echo $user['TenDangNhap']?>">
					<?php if(isset($error['username'])): ?>
						<p class="text-danger"><?php echo $error['username']; ?></p>
					<?php endif ?>
				</div>
				<div>
					<span>Mật khẩu</span>
					<input type="password" name="password" placeholder="Mật khẩu" value="">
					<?php if(isset($error['password'])): ?> 
						<p class="text-danger"><?php echo $error['password']; ?></p>
					<?php endif ?>
				</div>
				<div>
					<span>Nhật lại mật khẩu</span>
					<input type="password" name="check_password" placeholder="Nhập lại mật khẩu" value="">
					<?php if(isset($error['check_password'])): ?>
						<p class="text-danger"><?php echo $error['check_password']; ?></p>
					<?php endif ?>
				</div>
				<input type="submit" value="Sửa">
			</div>
			
			<div class="clearfix"> </div>
		</form>
	</div>
</div>
<!--//content-->