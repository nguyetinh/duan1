<?php
include_once '../model_DAO/category.php';
include_once '../model_DAO/product.php';

extract($_REQUEST);
if (isset($act)) {
    switch ($act) {
        case 'home':
            $dsdm=category_list();
            // print_r($dsdm);
            $sp_hot=product_hot();
            $dm_nu=product_by_category(1);
            $dm_nam=product_by_category(2);
            $dm_treem=product_by_category(3);
            include_once 'view/template_header.php';
            include_once 'view/page_home.php';
            include_once 'view/template_footer.php';
            break;
        case 'search':
            $product_search=product_seach($keyword);
            include_once 'view/template_header.php';
            include_once 'view/page_search.php';
            include_once 'view/template_footer.php';
            break;
        case 'category':
            if (!isset($min_price))$min_price=0;
            if (!isset($max_price))$max_price=99999999;
            if (!isset($order)) $order="ASC";
            $sp_dm=product_by_category_filter_order($id,$min_price,$max_price,$order);
            include_once 'view/template_header.php';
            include_once 'view/page_category.php';
            include_once 'view/template_footer.php';
            break;
    }
}
