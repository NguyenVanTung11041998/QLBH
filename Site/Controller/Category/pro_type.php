<?php 
    $cate = new category;
    $category = $cate->get_category('danhmuc');
    $data = [];
    foreach ($category as $item) {
        $id_cate = intval($item['MaDanhMuc']);
        $list_loaisp = $cate->get_loaisp($id_cate);
        $data[$item['TenDanhMuc']] = $list_loaisp;
    }
    //_debug($loaisp);
    $maLoaiSP = getInput('id');
    $loaiSP = $cate->fetch_name('loaisanpham','MaLoaiSP', $maLoaiSP);
    //_debug($products);
    if(isset($_GET['p']))
    {
        $p = $_GET['p'];
    }
    else{
        $p = 1;
    }
    $total = count($cate->get_products_DM($maLoaiSP));
    $sql = "SELECT *FROM sanpham INNER JOIN loaisanpham on sanpham.MaLoaiSP = loaisanpham.MaLoaiSP  WHERE loaisanpham.MaLoaiSP = $maLoaiSP";
    $row = 6;
    $products = $cate->phantrang($sql, $p, $row);
    $sotrang = ceil($total/$row);
    $view = $controller.'/'.$action.'.php';
?>