<?php include("Public/template/header.php");?>
<!--content-->
<div class=" container">
	<div class=" register">
		<h1>Đăng ký</h1>
		<form> 
			<div class="col-md-6 register-top-grid">
				<h3>Thông tin cá nhân</h3>
				<div>
					<span>Họ tên</span>
					<input type="text"> 
				</div>
				<div>
					<span>Địa chỉ</span>
					<input type="text"> 
				</div>
				<div>
					<span>Số điện thoại</span>
					<input type="text"> 
				</div>
			</div>
			<div class="col-md-6 register-bottom-grid">
				<h3>Thông tin tài khoản</h3>
				<div>
					<span>Tên đăng nhập</span>
					<input type="password" >
				</div>
				<div>
					<span>Mật khẩu</span>
					<input type="password">
				</div>
				<div>
					<span>Nhật lại mật khẩu</span>
					<input type="password">
				</div>
				<input type="submit" value="Tạo tài khoản">
			</div>
			
			<div class="clearfix"> </div>
		</form>
	</div>
</div>
<!--//content-->
<?php include("Public/template/footer.php"); ?>