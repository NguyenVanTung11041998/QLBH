<?php
     $cate = new CategoryMeNu;
     $category = $cate->get_category('danhmuc');
     $loaisp = [];
     foreach ($category as $item) {
         $id_cate = intval($item['MaDanhMuc']);
         $list_loaisp = $cate->get_loaisp($id_cate);
         $loaisp[$item['TenDanhMuc']][$item['MaDanhMuc']] = $list_loaisp;
     }
?>
