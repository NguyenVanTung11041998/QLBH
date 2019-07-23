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
    $maDM = getInput('id');
    $products = $cate->get_products($maDM);
    //_debug($products);
    $view = $controller.'/'.$action.'.php';
?>