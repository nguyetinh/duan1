<?php
include_once "pdo.php";
function category_list(){
    $sql = "SELECT * FROM DanhMuc";
    return pdo_query($sql);
}
?>