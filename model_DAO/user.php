<?php
include_once 'pdo.php';
function check_login($email,$pass){
    $sql = "SELECT * FROM  KhachHang WHERE Email=? AND MatKhau=?";
    return pdo_query_one($sql,$email,$pass);
}
function user_register($name,$email,$pass,$phone,$address,$image){
$sql = "INSERT INTO KhachHang(HoTen,Email,MatKhau,SDT,DiaChi,Anh)
VALUES (?,?,?,?,?,?)";
return pdo_execute($sql,$name,$email,$pass,$phone,$address,$image);
}
function user_edit($name,$email,$phone,$address,$image,$id){
    $sql = "UPDATE KhachHang SET HoTen=?,Email=?,SDT=?,DiaChi=?,Anh=?
    WHERE MaKhachHang=?";
    return pdo_execute($sql,$name,$email,$phone,$address,$image,$id);
}
?>