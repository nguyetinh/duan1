<?php
    include_once '../model_Dao/product.php';
    extract($_REQUEST);
    if(isset($act)){
        switch($act){
            case 'add':
                $sp=product_one($id);
                extract($sp);
                $_SESSION['cart'][$id]=array(
                    'MaSanPham'=>$sp['MaSanPham'],
                    'TenSanPham'=>$sp['TenSanPham'],
                    'HinhAnh'=>$sp['HinhAnh'],
                    'GiaKhuyenMai'=>$sp['GiaKhuyenMai'],
                    'Gia'=>$sp['Gia'],
                    'SoLuong'=>1
                );
                include_once 'view/template_header.php';
                include_once 'view/page_cart.php';
                include_once 'view/template_footer.php';
                break;
                
        }
    }
?>