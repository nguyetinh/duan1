<?php
    include_once '../model_Dao/product.php';
    
    extract($_REQUEST);
    if(isset($act)){
        switch($act){
            case 'detail':
                $product_detail = pro_detail($id);
                // include_once 'view/template_header.php';
                include_once 'view/page_product_detail.php';
                include_once 'view/template_footer.php';
                
        }
    }




?>