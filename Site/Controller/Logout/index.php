<?php
    unset($_SESSION['user_name']);
    unset($_SESSION['user_id']);
    echo "<script>alert('Đăng xuất thành công');location.href='index.php';</script>"
?>