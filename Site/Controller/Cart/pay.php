
<?php
    $cart = new cart;
    $user = $cart->fetch_user($_SESSION['user_id']);
    if($_SERVER["REQUEST_METHOD"] == "POST")
	{
        $tong = $_SESSION['tong'];
        $maKH = $_SESSION['user_id'];
        $note =	postInput('note');
		$id_hoadon = $cart ->insert_hoadon($maKH, $tong, $note);
		if($id_hoadon > 0)
		{
			foreach ($_SESSION['cart'] as $key => $value) {
					$maHD = $id_hoadon;
					$maSP = $key;
					$soLuong = $value['qty'];
					$donGia = $value['price'];
				$hdchitiet = $cart ->insert_hoadonchitiet($maHD, $maSP, $soLuong, $donGia);
			}
			unset($_SESSION['tong']);
            unset($_SESSION['cart']);
            echo "<script>alert('Thanh toán đơn hàng thành công.');location.href='index.php';</script>";
		}
	}
    $view = $controller.'/'.$action.'.php';
?>