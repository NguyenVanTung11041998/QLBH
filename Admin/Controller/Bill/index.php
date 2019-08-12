<?php 
	include "Admin/Model/HoaDonModel.php";
	$hoaDonModel = new HoaDonModel;
	if(isset($_GET['action']))
		$action = $_GET['action'];
	else
		$action = '';

	switch ($action) 
	{
		case 'status':
		{
			$id = intval($_GET['id']);
			$hoadon = $hoaDonModel -> fetch_hd($id);
			if($hoadon['DaThanhToan']==1)
			{
				echo "<script>alert('Đơn hàng đã được xử lý');location.href='?controller=bill'</script>";
			}
			else if($hoadon['DaThanhToan'] == 0)
			{
				$status = 1;
				$update_status = $hoaDonModel -> update_hoadon($status, $id);
				if($update_status)
				{
					$hoadonct = $hoaDonModel -> fetch_hdct($id);
					foreach($hoadonct as $item)
					{
						$product_id = intval($item['MaSP']);
						$product = $hoaDonModel -> fetch_product($product_id);
						$slton = $product['SoLuongTon'] - $item['SoLuongMua'];
						$slmua = $product['SoLanMua'] + 1;
						$update_sp = $hoaDonModel -> update_sanpham($slton, $slmua, $product_id);
					}
				
				}
			}
			
			if(isset($_GET['page']) && $_GET['page'] > 0)
				$page = $_GET['page'];
			else
				$page = 1;
			$danhSachHoaDon = $hoaDonModel->LayDanhSach($page, 20);
			require_once('Admin/View/Bill/index.php');
			require_once('Admin/View/Bill/index.php');
			break;
		}
		default:
		{
			if(isset($_GET['page']) && $_GET['page'] > 0)
				$page = $_GET['page'];
			else
				$page = 1;
			$danhSachHoaDon = $hoaDonModel->LayDanhSach($page, 20);
			require_once('Admin/View/Bill/index.php');
			break;
		}
	}
?>
