
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
					<ul>
						<li ><a href="?controller=Login">Đăng nhập</a></li>
						<li><a  href="?controller=Register">Đăng ký</a></li>

					</ul>
					<div class="cart box_1">
						<a href="checkout.html">
							<h3> <div class="total">
								<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
								<img src="Upload/cart.png" alt=""/></h3>
							</a>
							<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

						</div>
						<div class="clearfix"> </div>
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
						<ul class="memenu skyblue">
							<li class="active grid"><a class="color8" href="index.php">Home</a></li>	
							<?php foreach($loaisp as $key => $value): ?>
							<?php foreach($value as $keys => $values): ?>
							<li><a class="color1" href="?controller=category&action=cate_pro&id=<?php echo $keys?>"><?php echo $key?></a>
							<?php endforeach ?>
								<div class="mepanel">
									<div class="row">
										<div class="col1">
											<div class="h_nav">
												<?php foreach($values as $item): ?>
												<ul>
													<li><a href="?id=<?php echo $item['MaLoaiSP']?>"><?php echo $item['TenLoai']?></a></li>
												</ul>	
												<?php endforeach ?>
											</div>							
										</div>
									</div>
								</div>	
							</li>
							<?php endforeach ?>
							<li><a class="color4" href="blog.html">Blog</a></li>				
							<li><a class="color6" href="contact.html">Conact</a></li>
						</ul> 
					</div>

					<div class="clearfix"> </div>
				</div>
			</div>

		</div>
	</div>