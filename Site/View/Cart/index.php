<div class="container">
    <div class="check">
        <h1>My Shopping Bag (2)</h1>
        <div class="col-md-9 cart-items">
            <table class="table table-hover" id="cart_info">
	           	<thead>
	           		<tr>
	           			<th>STT</th>
	           			<th>Tên sản phẩm</th>
	           			<th>Hình ảnh</th>
	           			<th>Số lượng</th>
	           			<th>Giá</th>
	           			<th>Tổng tiền</th>
	           			<th>Thao tác</th>
	           		</tr>
	           	</thead>
	           	<tbody>
                       <?php $stt=1; foreach($_SESSION['cart'] as $key => $value):?>
                        <tr>
                            <td><?php echo $stt?></td>
                            <td><?php echo $value['name']?></td>
                            <td><img src="Upload/product/<?php echo $value['thumbar']?>" style="height:100px;" alt=""></td>
                            <td><input type="number" name="qty" id="qty" class="form-control qty" value="<?php echo $value['qty'] ?>" style="width:70px" min=0></td>
                            <td><?php echo FormatPrice($value['price'])?></td>
                            <td><?php echo FormatPrice($value['qty']*$value['price'])?></td>
                            <td>
                                <a class="btn btn-danger" href="?controller=cart&action=remore&id=<?php echo $key?>">Xóa</a>
                                <a class="btn btn-success" href="">Sửa</a>
                            </td>
                        </tr>s
                       <?php $stt++; endforeach?>
                </tbody>
            </table>
        </div>
        <div class="col-md-3 cart-total">
            <h3 class="continue" href="#">Thông tin giỏ hàng</h3>
            <div class="price-details">
                <h3>Chi tiết giá</h3>
                <span>Số tiền</span>
                <span class="total1">6200.00</span>
                <span>Giảm giá</span>
                <span class="total1">---</span>
                <span>Phí vận chuyển</span>
                <span class="total1">150.00</span>
                <div class="clearfix"></div>
            </div>
            <ul class="total_price">
                <li class="last_price">
                    <h4>Tổng tiền</h4>
                </li>
                <li class="last_price"><span>6350.00</span></li>
                <div class="clearfix"> </div>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>