<?php
    $qty = intval(getInput('qty'));
    $key = intval(getInput('key'));
    $_SESSION['cart'][$key]['qty'] = $qty;
    echo 1;
?>