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
                            <li class="subitem1"><a href="?controller=category&action=pro_type&id=<?php echo $item['MaLoaiSP']?>&p=1"><?php echo $item['TenLoai']?> </a></li>
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
        <div class="col-md-9 product1">
            <h3 class="title-main">
                <a href="javascript:void(0)">Sản phẩm tìm kiếm</a>
            </h3>
			<?php foreach($pro_search as $item): ?>
                <div class="col-md-4 bottom-cd simpleCart_shelfItem">
					<div class="product-at ">
						<a href="?controller=Product&action=detail&id=<?php echo $item['MaSP']?>">
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
			<?php endforeach ?>
        </div>
        <div class="clearfix"> </div>
        <!-- <nav class="in">
            <ul class="pagination">
                <li>
                    <a href="?controller=search&p=<?php echo $p-1?> " aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <?php for($i=1; $i <= $sotrang; $i++): ?>
                    <li class="<?php echo isset($_GET['p']) && $_GET['p']==$i ? 'active' : ''?>"><a href="?controller=search&p=<?php echo $i?> "><?php echo $i?></a></li>
                <?php endfor ?>
                <li>
                    <a href="?controller=search&p=<?php echo $p+1?> " aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>    
        </nav> -->
    </div>
</div>


<!---->