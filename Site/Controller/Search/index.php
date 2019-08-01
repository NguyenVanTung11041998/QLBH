<?php 
    $cate = new search;
    //lay danh sach danh mục và loại sản phẩm
    $category = $cate->get_category('danhmuc');
    $data = [];
    foreach ($category as $item) {
        $id_cate = intval($item['MaDanhMuc']);
        $list_loaisp = $cate->get_loaisp($id_cate);
        $data[$item['TenDanhMuc']] = $list_loaisp;
    }

    //Lấy sản phẩm mới
    $pro_new = $cate -> fetch_pro_new();
    
    $maDM = getInput('id');
    
    //Phân trang
    if(isset($_GET['p']))
    {
        $p = $_GET['p'];
    }
    else{
        $p = 1;
    }
    // $total = count($cate->get_products($maDM));
    // $sql = "SELECT *FROM sanpham INNER JOIN loaisanpham on sanpham.MaLoaiSP = loaisanpham.MaLoaiSP INNER JOIN danhmuc on loaisanpham.MaDanhMuc = danhmuc.MaDanhMuc WHERE danhmuc.MaDanhMuc = $maDM";
    // $row = 6;
    // $products = $cate->phantrang($sql, $p, $row);
    // $sotrang = ceil($total/$row);
    //_debug($products);
    if(isset($_REQUEST['submit']))
    {
        $key = $_GET['name'];
        if(empty($key))
        {
            $pro_search = [];
        }
        else
        {
            $pro_search = $cate->search($key);
        }
    }
    // if(isset($_GET['name']))
    // {
    //     $key = $_GET['name'];
    //     $pro_search = $cate -> search($key);
    //     _debug($pro_search);
    // }
    $view = $controller.'/'.$action.'.php';
?>