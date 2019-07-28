<?php
    if( !isset($_SESSION['cart']) || count($_SESSION['cart']) == 0)
    {
        echo "<script>alert ('Không có sản phẩm trong giỏ hàng'); location.href = 'index.php'</script>";
    }
    $view = $controller.'/'.$action.'.php';
?>