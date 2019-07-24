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
                    <a href="#" class="shop-now">SHOP NOW</a>
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
                        <a href="#"><img class="img-responsive " src="images/p1.jpg" alt=""></a>
                    </div>
                    <div class=" fashion-grid1">
                        <h6 class="best2"><a href="#" >Lorem ipsum dolor sit
                            amet consectetuer  </a>
                        </h6>
                        <span class=" price-in1"> $40.00</span>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="product-go">
                    <div class=" fashion-grid">
                        <a href="#"><img class="img-responsive " src="images/p2.jpg" alt=""></a>
                    </div>
                    <div class="fashion-grid1">
                        <h6 class="best2"><a href="#" >Lorem ipsum dolor sit
                            amet consectetuer </a>
                        </h6>
                        <span class=" price-in1"> $40.00</span>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class=" per1">
                <a href="#" >
                    <img class="img-responsive" src="images/pro.jpg" alt="">
                    <div class="six1">
                        <h4>DISCOUNT</h4>
                        <p>Up to</p>
                        <span>60%</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-9 product-price1">
            <div class="col-md-5 single-top">
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
                    <div class="available">
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
                        </ul>
                    </div>
                    <ul class="tag-men">
                        <li><span>TAG</span>
                            <span class="women1">: Women,</span>
                        </li>
                        <li><span>SKU</span>
                            <span class="women1">: CK09</span>
                        </li>
                    </ul>
                    <a href="#" class="add-cart item_add">ADD TO CART</a>
                </div>
            </div>
            <div class="clearfix"> </div>
            <!---->
            <!-- <div class="cd-tabs">
                <nav>
                    <ul class="cd-tabs-navigation">
                        <li><a data-content="fashion"  href="#0">Description </a></li>
                        <li><a data-content="cinema" href="#0" >Addtional Informatioan</a></li>
                        <li><a data-content="television" href="#0" class="selected ">Reviews (1)</a></li>
                    </ul>
                </nav>
                <ul class="cd-tabs-content">
                    <li data-content="fashion" >
                        <div class="facts">
                            <p > There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined </p>
                            <ul>
                                <li>Research</li>
                                <li>Design and Development</li>
                                <li>Porting and Optimization</li>
                                <li>System integration</li>
                                <li>Verification, Validation and Testing</li>
                                <li>Maintenance and Support</li>
                            </ul>
                        </div>
                    </li>
                    <li data-content="cinema" >
                        <div class="facts1">
                            <div class="color">
                                <p>Color</p>
                                <span >Blue, Black, Red</span>
                                <div class="clearfix"></div>
                            </div>
                            <div class="color">
                                <p>Size</p>
                                <span >S, M, L, XL</span>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </li>
                    <li data-content="television" class="selected">
                        <div class="comments-top-top">
                            <div class="top-comment-left">
                                <img class="img-responsive" src="images/co.png" alt="">
                            </div>
                            <div class="top-comment-right">
                                <h6><a href="#">Hendri</a> - September 3, 2014</h6>
                                <ul class="star-footer">
                                    <li><a href="#"><i> </i></a></li>
                                    <li><a href="#"><i> </i></a></li>
                                    <li><a href="#"><i> </i></a></li>
                                    <li><a href="#"><i> </i></a></li>
                                    <li><a href="#"><i> </i></a></li>
                                </ul>
                                <p>Wow nice!</p>
                            </div>
                            <div class="clearfix"> </div>
                            <a class="add-re" href="#">ADD REVIEW</a>
                        </div>
                    </li>
                    <div class="clearfix"></div>
                </ul>
            </div> -->
            <div class=" bottom-product">
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
                        <a href="#" class="item_add">
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