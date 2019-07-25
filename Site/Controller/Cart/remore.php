<?php
    $id = intval(getInput('id'));
    unset($_SESSION['cart'][$id]);
    echo "<script>alert('Xóa sản phẩm trong giỏ hàng thành công');location.href='?controller=cart';</script>";
?>