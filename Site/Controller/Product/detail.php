<?php
    $cate = new CategoryMenu;
    $category = $cate->get_category('danhmuc');
    $data = [];
    foreach ($category as $item) {
        $id_cate = intval($item['MaDanhMuc']);
        $list_loaisp = $cate->get_loaisp($id_cate);
        $data[$item['TenDanhMuc']] = $list_loaisp;
    }
    $product = new product;
    $maSP = intval(getInput('id'));
    $detail = $product->fetchOne_Pro($maSP);
    $cate_id = intval($detail['MaLoaiSP']);
    $related_pro = $product->fetchSql($cate_id);
    //_debug($detail);
    //lấy sản phâm mới
    $pro_new = $product -> fetch_pro_new();
    $view = $controller.'/'.$action.'.php';
?>