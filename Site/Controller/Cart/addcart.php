<?php
    $cart = new cart;
    if(!isset($_SESSION['user_name']))
    {
        echo "<script>alert('Bạn cần phải đăng nhâp để sử dụng chức năng này');location.href='index.php'</script>";
    }
    else
    {
        $id = intval(getInput('id'));
        $product = $cart->fetchID($id);
        //_debug($product);
        if(!isset($_SESSION['cart'][$id]))
        {
            $_SESSION['cart'][$id]['name'] = $product['TenSP'];
            $_SESSION['cart'][$id]['thumbar'] = $product['HinhAnh'];
            $_SESSION['cart'][$id]['qty'] = 1;  
            $_SESSION['cart'][$id]['price'] = $product['DonGia'];

        }
        else
        {
            $_SESSION['cart'][$id]['qty']+= 1;
        }
        echo "<script>alert('Thêm vào giỏ hàng thành công.');location.href='?controller=cart'</script>";
    }
?>  