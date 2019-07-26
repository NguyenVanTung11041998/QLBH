
<!--content-->
<div class="container">
	<div class="account">
		<?php if(isset($_SESSION['success'])): ?>
		<div class="alert alert-success">
			<strong style="color: #3c763d">Success!</strong> <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
		</div>
		<?php endif ?>
		<h1>Đăng nhập</h1>
		<div class="account-pass">
			<div class="col-md-8 account-top">
				<form id="formLogin" method="POST">

					<div> 	
						<span>Tên đăng nhập</span>
						<input type="text" name="username" placeholder="Tên đăng nhập" />
					</div>
					<?php if(isset($error['username'])): ?>
						<p class="text-danger"><?php echo $error['username']; ?></p>
					<?php endif ?> 
					<div> 
						<span >Mật khẩu</span>
						<input type="password" name="password" placeholder="Mật khẩu" />
					</div>
					<?php if(isset($error['password'])): ?>
						<p class="text-danger"><?php echo $error['password']; ?></p>
					<?php endif ?>
					<?php if(isset($_SESSION['error'])): ?>
					<div class="alert alert-danger">
						<strong style="color: red">Error!</strong> <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
					</div>
					<?php endif ?>
					<input type="submit" value="Đăng nhập"/>  
				</form>
			</div>
			<div class="col-md-4 left-account ">
				<a href="single.html"><img class="img-responsive " src="Upload/s1.jpg" alt=""></a>
				<div class="five">
					<h2>25% </h2><span>discount</span>
				</div>
				<a href="index.php?controller=register" class="create">Create an account</a>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

</div>

<!--//content-->