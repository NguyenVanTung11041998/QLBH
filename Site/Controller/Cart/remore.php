<?php
    $id = intval(getInput('id'));
    unset($_SESSION['cart'][$id]);
    echo "<script> if(confirm('Bạn có chắc muốn xóa sản phẩm này không?')) {alert('Xóa thành công'); location.href = '?controller=cart'; }</script>";
    //echo "<script>alert('Xóa sản phẩm trong giỏ hàng thành công');location.href='?controller=cart';</script>";
?>