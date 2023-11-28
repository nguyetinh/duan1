<?php
include_once 'pdo.php';
function check_login($email,$pass){
    $sql = "SELECT * FROM  KhachHang WHERE Email=? AND MatKhau=?";
    return pdo_query_one($sql,$email,md5($pass));
}
function user_register($name,$email,$pass,$phone,$address,$image){
$sql = "INSERT INTO KhachHang(HoTen,Email,MatKhau,SDT,DiaChi,Anh)
VALUES (?,?,md5($pass),?,?,?)";
return pdo_execute($sql,$name,$email,$phone,$address,$image);
}
function user_one($id){
    $sql = "SELECT * FROM KhachHang where MaKhachHang = ?";
    return pdo_query_one($sql,$id);
}
function user_edit($name,$email,$phone,$address,$image,$id){
    $sql = "UPDATE KhachHang SET HoTen=?,Email=?,SDT=?,DiaChi=?,Anh=?
    WHERE MaKhachHang=?";
    return pdo_execute($sql,$name,$email,$phone,$address,$image,$id);
}
function check_email($email){
    $sql = "SELECT * FROM  KhachHang WHERE Email=?";
    return pdo_query_one($sql,$email);
}
function randomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < $length; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    return $randomString;
}

$randomValue = randomString(5);
// echo $randomValue;

function re_pass($pass,$mail){
    $sql = "update KhachHang set MatKhau = ? where Email = ?";
    return pdo_query($sql,md5($pass),$mail);
}
?>