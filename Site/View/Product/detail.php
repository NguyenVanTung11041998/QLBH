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
            <!---->
            <div class="product-bottom">
                <div class="of-left-in">
                    <h3 class="cate">
						<i class="fa fa-list"></i>
						Sản phẩm mới
					</h3>
                </div>
                <?php foreach($pro_new as $item): ?>
                    <div class="product-go clearfix">
                        <div class=" fashion-grid">
                            <a href="?controller=product&action=detail&id=<?php echo $item['MaSP']?>"><img class="img-responsive " src="Upload/product/<?php echo $item['HinhAnh']?>" alt=""></a>
                        </div>
                        <div class=" fashion-grid1">
                            <h6 class="best2">
                                <a href="?controller=product&action=detail&id=<?php echo $item['MaSP']?>"><?php echo $item['TenSP']?></a>
                            </h6>
                            <span class=" price-in1"><?php echo Formatprice($item['DonGia'])?></span>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            <div class=" per1">
                    <img class="img-responsive" src="Upload/pro.jpg" alt="">
                    <div class="six1">
                        <h4>DISCOUNT</h4>
                        <p>Up to</p>
                        <span>60%</span>
                    </div>
            </div>
        </div>
        <div class="col-md-9 product-price1">
            <div class="col-md-5 single-top" style="margin-bottom:40px;">
                <div class="flexslider">
                    <ul class="slides">
                        <li data-thumb="Upload/product/<?php echo $detail['HinhAnh']?>">
                            <img src="Upload/product/<?php echo $detail['HinhAnh']?>" />
                        </li>
                        <li data-thumb="Upload/product/<?php echo $detail['HinhAnh']?>">
                            <img src="Upload/product/<?php echo $detail['HinhAnh']?>" />
                        </li>
                        <li data-thumb="Upload/product/<?php echo $detail['HinhAnh']?>">
                            <img src="Upload/product/<?php echo $detail['HinhAnh']?>" />
                        </li>
                        <li data-thumb="Upload/product/<?php echo $detail['HinhAnh']?>">
                            <img src="Upload/product/<?php echo $detail['HinhAnh']?>" />
                        </li>
                    </ul>
                </div>
                <!-- FlexSlider -->
                <script defer src="Public/site/js/jquery.flexslider.js"></script>
                <link rel="stylesheet" href="Public/site/css/flexslider.css" type="text/css" media="screen" />
                <script>
                    // Can also be used with $(document).ready()
                    $(window).load(function() {
                      $('.flexslider').flexslider({
                        animation: "slide",
                        controlNav: "thumbnails"
                      });
                    });
                </script>
            </div>
            <div class="col-md-7 single-top-in simpleCart_shelfItem">
                <div class="single-para ">
                    <h4><?php echo $detail['TenSP']?></h4>
                    <div class="star-on">
                        <ul class="star-footer">
                            <li><a href="#"><i> </i></a></li>
                            <li><a href="#"><i> </i></a></li>
                            <li><a href="#"><i> </i></a></li>
                            <li><a href="#"><i> </i></a></li>
                            <li><a href="#"><i> </i></a></li>
                        </ul>
                        <div class="review">
                            <a href="#"> Đánh giá của khách hàng </a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <h5 class="item_price"><?php echo formatPrice($detail['DonGia'])?></h5>
                    <p>
                        <?php echo $detail['MoTa']?> 
                    </p>
                    <!-- <div class="available">
                        <ul>
                            <li>
                                Color
                                <select>
                                    <option>Silver</option>
                                    <option>Black</option>
                                    <option>Dark Black</option>
                                    <option>Red</option>
                                </select>
                            </li>
                            <li class="size-in">
                                Size
                                <select>
                                    <option>S</option>
                                    <option>M</option>
                                    <option>L</option>
                                    <option>XL</option>
                                    <option>XXl</option>
                                </select>
                            </li>
                            <div class="clearfix"> </div>
                        </ul> -->
                    <!-- </div> -->
                        <!-- <ul class="tag-men">
                            <li><span>TAG</span>
                                <span class="women1">: Women,</span>
                            </li>
                            <li><span>SKU</span>
                                <span class="women1">: CK09</span>
                            </li>
                        </ul> -->
                    <a href="?controller=cart&action=addcart&id=<?php echo $detail['MaSP']?>" class="add-cart item_add">Thêm Vào Giỏ Hàng</a>
                </div>
            </div>
            <div class="clearfix"> </div>
            
            
            <div class="bottom-product col-md-12" style="padding:0;">
                <h3 class="title-main col-md-12" style="padding:0;">
                    <a href="javascript:void(0)">Sản phẩm liên quan</a>
                </h3>
                <?php foreach($related_pro as $item): ?>
                    <div class="col-md-3 bottom-cd simpleCart_shelfItem">
                        <div class="product-at ">
                            <a href="?controller=Product&action=detail&id=<?php echo $item['MaSP']?>">
                                <img class="img-responsive img-related" src="Upload/product/<?php echo $item['HinhAnh']?>" alt="">
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
                <?php endforeach ?>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!--//content-->