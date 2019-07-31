
	<!--header-->
	<div class="header">
		<div class="header-top">
			<div class="container">
				<div class="search">
					<form>
						<input type="text" value="Search " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
						<input type="submit" value="Go">
					</form>
				</div>
				<div class="header-left">
					<?php if(isset($_SESSION['user_name'])): ?>
						<li>Xin chào <?php echo $_SESSION['user_name']; ?></li>
						
						<div class="cart box_1">
							<a href="?controller=cart">
								<i class="fa fa-shopping-cart"></i>
								Giỏ hàng(<?php echo count($_SESSION['cart'])?>)
							</a>
						</div>
						<li>
							<a href="" style="padding-bottom:5px"><i class="fa fa-user"></i> Tài khoản <i class="fa fa-caret-down"></i></a>
							<ul class="header-submenu">
								<li style="margin-right:0"><a href=""><i class="fa fa-info-circle"></i>Thông tin</a></li>
								<li><a href="?controller=logout"><i class="fa fa-share-square-o"></i>Đăng xuất</a></li>
							</ul>
						</li>
						<div class="clearfix"> </div>
					<?php else: ?>
						<ul>
							<li ><a href="?controller=Login"><i class="fa fa-sign-in"></i>Đăng nhập</a></li>
							<li><a  href="?controller=Register"><i class="fa fa-user"></i></i>Đăng ký</a></li>
						</ul>
					<?php endif ?>	
					</div>
					<div class="clearfix"> </div>
				</div>
		</div>
			<div class="container">
				<div class="head-top">
					<div class="logo">
						<a href="index.php"><img src="Upload/logo.png" alt=""></a>	
					</div>
					<div class=" h_menu4">
						<ul class="memenu skyblue clearfix">
							<li class="active grid"><a class="color8" href="index.php">Trang chủ</a></li>	
							<?php foreach($loaisp as $key => $value): ?>
								<?php foreach($value as $keys => $values): ?>
									<li><a class="color1" href="?controller=category&action=cate_pro&id=<?php echo $keys?>&p=1"><?php echo $key?></a>
								
									<div class="mepanel">
										<div class="row">
											<ul class="clearfix">
												<?php foreach($values as $item): ?>
													<li><a href="?controller=category&action=pro_type&id=<?php echo $item['MaLoaiSP']?>&p=1"><?php echo $item['TenLoai']?></a></li>
												<?php endforeach ?>
											</ul>
										</div>
									</div>	
								</li>
								<?php endforeach ?>
							<?php endforeach ?>
							<li><a class="color4" href="#">Blog</a></li>				
							<li><a class="color6" href="#">Conact</a></li>
						</ul> 
					</div>

					<div class="clearfix"> </div>
				</div>
			</div>

		</div>
	</div>