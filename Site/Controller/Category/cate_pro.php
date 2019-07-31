<?php 
    $cate = new category;
    $category = $cate->get_category('danhmuc');
    $data = [];
    foreach ($category as $item) {
        $id_cate = intval($item['MaDanhMuc']);
        $list_loaisp = $cate->get_loaisp($id_cate);
        $data[$item['TenDanhMuc']] = $list_loaisp;
    }
    $maDM = getInput('id');
    $name_cate = $cate->fetch_name('danhmuc','MaDanhMuc',$maDM);
    if(isset($_GET['p']))
    {
        $p = $_GET['p'];
    }
    else{
        $p = 1;
    }
    $total = count($cate->get_products($maDM));
    $sql = "SELECT *FROM sanpham INNER JOIN loaisanpham on sanpham.MaLoaiSP = loaisanpham.MaLoaiSP INNER JOIN danhmuc on loaisanpham.MaDanhMuc = danhmuc.MaDanhMuc WHERE danhmuc.MaDanhMuc = $maDM";
    $row = 6;
    $products = $cate->phantrang($sql, $p, $row);
    $sotrang = ceil($total/$row);
    //_debug($products);

    $view = $controller.'/'.$action.'.php';
?>