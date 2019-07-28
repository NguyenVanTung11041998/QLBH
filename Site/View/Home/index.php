<div class="banner">
		<div class="container">
			  <script src="Public/site/js/responsiveslides.min.js"></script>
  <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
			<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider">
			    <li>
					
						<div class="banner-text">
							<h3>Lorem Ipsum is not simply dummy  </h3>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor .</p>
						
						</div>
				
				</li>
				<li>
					
						<div class="banner-text">
							<h3>There are many variations </h3>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor .</p>
							

						</div>
					
				</li>
				<li>
						<div class="banner-text">
							<h3>Sed ut perspiciatis unde omnis</h3>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor .</p>


						</div>
					
				</li>
			</ul>
		</div>

	</div>
	</div>

<!--content-->

<div class="content">
	<div class="container">
		<div class="content-top">
			<h1>SẢN PHẨM MỚI</h1>
			<div class="grid-in">
				<?php foreach($pro_new as $item): ?>
					<div class="col-md-3 bottom-cd simpleCart_shelfItem">
						<div class="product-at ">
							<a href="?controller=product&action=detail&id=<?php echo $item['MaSP']?>">
								<img class="img-responsive thumbar" src="Upload/product/<?php echo $item['HinhAnh']?>" alt="">
								<div class="pro-grid">
									<span class="buy-in">Buy Now</span>
								</div>
							</a>
						</div>
						<p class="tun"><?php echo $item['TenSP']?></p>
						<a href="?controller=cart&action=addcart&id=<?php echo $item['MaSP']?>" class="item_add">
							<p class="number item_price"><i> </i><?php echo formatPrice($item['DonGia'])?></p>
						</a>
					</div>
				<?php endforeach?>
				
				<div class="clearfix"> </div>
			</div>
		</div>
		<!----->

		<div class="content-top-bottom">
			<h2>Featured Collections</h2>
			<div class="col-md-6 men">
				<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="Upload/t1.jpg" alt="">
					<div class="b-wrapper">
						<h3 class="b-animate b-from-top top-in   b-delay03 ">
							<span>Lorem</span>	
						</h3>
					</div>
				</a>


			</div>
			<div class="col-md-6">
				<div class="col-md1 ">
					<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="Upload/t2.jpg" alt="">
						<div class="b-wrapper">
							<h3 class="b-animate b-from-top top-in1   b-delay03 ">
								<span>Lorem</span>	
							</h3>
						</div>
					</a>

				</div>
				<div class="col-md2">
					<div class="col-md-6 men1">
						<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="Upload/t3.jpg" alt="">
							<div class="b-wrapper">
								<h3 class="b-animate b-from-top top-in2   b-delay03 ">
									<span>Lorem</span>	
								</h3>
							</div>
						</a>

					</div>
					<div class="col-md-6 men2">
						<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="Upload/t4.jpg" alt="">
							<div class="b-wrapper">
								<h3 class="b-animate b-from-top top-in2   b-delay03 ">
									<span>Lorem</span>	
								</h3>
							</div>
						</a>

					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!---->
	<div class="content-bottom">
		<ul>
			<li><a href="#"><img class="img-responsive" src="Upload/lo.png" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="Upload/lo1.png" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="Upload/lo2.png" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="Upload/lo3.png" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="Upload/lo4.png" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="Upload/lo5.png" alt=""></a></li>
			<div class="clearfix"> </div>
		</ul>
	</div>
</div>
