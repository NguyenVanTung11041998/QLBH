<!--content-->
<!---->
<div class="product">
    <div class="container">
        <div class="col-md-3 product-price">
            <div class=" rsidebar span_1_of_left">
                <div class="of-left">
                    <h3 class="cate">
						<i class="fa fa-list"></i>
						Danh mục
					</h3>
                </div>
                <ul class="menu">
                    <?php foreach($data as $key => $value):?>
                    <li class="item1">
                        <a href="#"><?php echo $key?> </a>
                        <ul class="cute">
                            <?php foreach($value as $item):?>
                            <li class="subitem1"><a href="?controller=category&action=pro_type&id=<?php echo $item['MaLoaiSP']?>"><?php echo $item['TenLoai']?> </a></li>
                            <?php endforeach ?>
                        </ul>
                    </li>
                    <?php endforeach ?>
                </ul>
            </div>
            <!--initiate accordion-->
            <script type="text/javascript">
                $(function() {
                    var menu_ul = $('.menu > li > ul'),
                           menu_a  = $('.menu > li > a');
                    menu_ul.hide();
                    menu_a.click(function(e) {
                        e.preventDefault();
                        if(!$(this).hasClass('active')) {
                            menu_a.removeClass('active');
                            menu_ul.filter(':visible').slideUp('normal');
                            $(this).addClass('active').next().stop(true,true).slideDown('normal');
                        } else {
                            $(this).removeClass('active');
                            $(this).next().stop(true,true).slideUp('normal');
                        }
                    });
                
                });
            </script>
            <!---->
            <div class="product-middle">
                <div class="fit-top">
                    <h6 class="shop-top">Lorem Ipsum</h6>
                    <a href="single.html" class="shop-now">SHOP NOW</a>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="sellers">
                <div class="of-left-in">
                    <h3 class="tag">Tags</h3>
                </div>
                <div class="tags">
                    <ul>
                        <li><a href="#">design</a></li>
                        <li><a href="#">fashion</a></li>
                        <li><a href="#">lorem</a></li>
                        <li><a href="#">dress</a></li>
                        <li><a href="#">fashion</a></li>
                        <li><a href="#">dress</a></li>
                        <li><a href="#">design</a></li>
                        <li><a href="#">dress</a></li>
                        <li><a href="#">design</a></li>
                        <li><a href="#">fashion</a></li>
                        <li><a href="#">lorem</a></li>
                        <li><a href="#">dress</a></li>
                        <div class="clearfix"> </div>
                    </ul>
                </div>
            </div>
            <!---->
            <div class="product-bottom">
                <div class="of-left-in">
                    <h3 class="best">Best Sellers</h3>
                </div>
                <div class="product-go">
                    <div class=" fashion-grid">
                        <a href="single.html"><img class="img-responsive " src="images/p1.jpg" alt=""></a>
                    </div>
                    <div class=" fashion-grid1">
                        <h6 class="best2"><a href="single.html" >Lorem ipsum dolor sit
                            amet consectetuer  </a>
                        </h6>
                        <span class=" price-in1"> $40.00</span>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="product-go">
                    <div class=" fashion-grid">
                        <a href="single.html"><img class="img-responsive " src="images/p2.jpg" alt=""></a>
                    </div>
                    <div class="fashion-grid1">
                        <h6 class="best2"><a href="single.html" >Lorem ipsum dolor sit
                            amet consectetuer </a>
                        </h6>
                        <span class=" price-in1"> $40.00</span>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class=" per1">
                <a href="single.html" >
                    <img class="img-responsive" src="images/pro.jpg" alt="">
                    <div class="six1">
                        <h4>DISCOUNT</h4>
                        <p>Up to</p>
                        <span>60%</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-9 product1">
			<?php foreach($products as $item): ?>
                <div class="col-md-4 bottom-cd simpleCart_shelfItem">
					<div class="product-at ">
						<a href="single.html">
							<img class="img-responsive thumbar" src="Upload/product/<?php echo $item['HinhAnh']?>" alt="">
							<div class="pro-grid">
								<span class="buy-in">Buy Now</span>
							</div>
						</a>
					</div>
					<p class="tun"><?php echo $item['TenSP']?></p>
					<a href="#" class="item_add">
						<p class="number item_price"><i> </i><?php echo formatPrice($item['DonGia'])?></p>
					</a>
                </div>
			<?php endforeach ?>
                <!-- <div class="col-md-4 bottom-cd simpleCart_shelfItem">
                    <div class="product-at ">
                        <a href="single.html">
                            <img class="img-responsive" src="images/pi1.jpg" alt="">
                            <div class="pro-grid">
                                <span class="buy-in">Buy Now</span>
                            </div>
                        </a>
                    </div>
                    <p class="tun">It is a long established fact that a reader</p>
                    <a href="#" class="item_add">
                        <p class="number item_price"><i> </i>$500.00</p>
                    </a>
                </div>
                <div class="col-md-4 bottom-cd simpleCart_shelfItem">
                    <div class="product-at ">
                        <a href="single.html">
                            <img class="img-responsive" src="images/pi4.jpg" alt="">
                            <div class="pro-grid">
                                <span class="buy-in">Buy Now</span>
                            </div>
                        </a>
                    </div>
                    <p class="tun">It is a long established fact that a reader</p>
                    <a href="#" class="item_add">
                        <p class="number item_price"><i> </i>$500.00</p>
                    </a>
                </div>
                <div class="col-md-4 bottom-cd simpleCart_shelfItem">
                    <div class="product-at ">
                        <a href="single.html">
                            <img class="img-responsive" src="images/pi5.jpg" alt="">
                            <div class="pro-grid">
                                <span class="buy-in">Buy Now</span>
                            </div>
                        </a>
                    </div>
                    <p class="tun">It is a long established fact that a reader</p>
                    <a href="#" class="item_add">
                        <p class="number item_price"><i> </i>$500.00</p>
                    </a>
                </div>
                <div class="col-md-4 bottom-cd simpleCart_shelfItem">
                    <div class="product-at ">
                        <a href="single.html">
                            <img class="img-responsive" src="images/pi.jpg" alt="">
                            <div class="pro-grid">
                                <span class="buy-in">Buy Now</span>
                            </div>
                        </a>
                    </div>
                    <p class="tun">It is a long established fact that a reader</p>
                    <a href="#" class="item_add">
                        <p class="number item_price"><i> </i>$500.00</p>
                    </a>
                </div>
                <div class="col-md-4 bottom-cd simpleCart_shelfItem">
                    <div class="product-at ">
                        <a href="single.html">
                            <img class="img-responsive" src="images/pi1.jpg" alt="">
                            <div class="pro-grid">
                                <span class="buy-in">Buy Now</span>
                            </div>
                        </a>
                    </div>
                    <p class="tun">It is a long established fact that a reader</p>
                    <a href="#" class="item_add">
                        <p class="number item_price"><i> </i>$500.00</p>
                    </a>
                </div>
                <div class="col-md-4 bottom-cd simpleCart_shelfItem">
                    <div class="product-at ">
                        <a href="single.html">
                            <img class="img-responsive" src="images/pi3.jpg" alt="">
                            <div class="pro-grid">
                                <span class="buy-in">Buy Now</span>
                            </div>
                        </a>
                    </div>
                    <p class="tun">It is a long established fact that a reader</p>
                    <a href="#" class="item_add">
                        <p class="number item_price"><i> </i>$500.00</p>
                    </a>
                </div>
                <div class="col-md-4 bottom-cd simpleCart_shelfItem">
                    <div class="product-at ">
                        <a href="single.html">
                            <img class="img-responsive" src="images/pi4.jpg" alt="">
                            <div class="pro-grid">
                                <span class="buy-in">Buy Now</span>
                            </div>
                        </a>
                    </div>
                    <p class="tun">It is a long established fact that a reader</p>
                    <a href="#" class="item_add">
                        <p class="number item_price"><i> </i>$500.00</p>
                    </a>
                </div>
                <div class="col-md-4 bottom-cd simpleCart_shelfItem">
                    <div class="product-at ">
                        <a href="single.html">
                            <img class="img-responsive" src="images/pi5.jpg" alt="">
                            <div class="pro-grid">
                                <span class="buy-in">Buy Now</span>
                            </div>
                        </a>
                    </div>
                    <p class="tun">It is a long established fact that a reader</p>
                    <a href="#" class="item_add">
                        <p class="number item_price"><i> </i>$500.00</p>
                    </a>
                </div> -->
        </div>
        <div class="clearfix"> </div>
        <nav class="in">
            <ul class="pagination">
                <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">2 <span class="sr-only"></span></a></li>
                <li><a href="#">3 <span class="sr-only"></span></a></li>
                <li><a href="#">4 <span class="sr-only"></span></a></li>
                <li><a href="#">5 <span class="sr-only"></span></a></li>
                <li> <a href="#" aria-label="Next"><span aria-hidden="true">»</span> </a> </li>
            </ul>
        </nav>
    </div>
</div>
<!---->