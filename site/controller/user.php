<?php
include_once '../model_DAO/user.php';
    extract($_REQUEST);
    if(isset($act)){
        switch($act){
            case 'login':
                if (isset($login_submit)) {
                    $data = check_login($email,$pass);
                    if ($data) {
                        $_SESSION['user']=$data;
                        header('location: ?mod=page&act=home');
                    }else
                    $data = 'Đăng nhập thất bại';
                }
                include_once 'view/template_header.php';
                include_once 'view/page_login.php';
                include_once 'view/template_footer.php';
                break;
            case 'info':
                include_once 'view/template_header.php';
                include_once 'view/page_info.php';
                include_once 'view/template_footer.php';
                break;
            case 'logout':
                unset($_SESSION['user']);
                header('location: ?mod=user&act=login');
                break;
            case 'register':
                if (isset($register_submit)){
                    user_register($name,$email,$pass,$phone,$address,$_FILES['image']['name']);
                    move_uploaded_file($_FILES['image']['tmp_name'],'../content/img/'.$_FILES['image']['name']);
                    header('location: ?mod=user&act=login');
                }
                include_once 'view/template_header.php';
                include_once 'view/page_register.php';
                include_once 'view/template_footer.php';
            case 'edit':
                if (isset($edit_submit)){
                    user_edit($name,$email,$phone,$address,$_FILES['image']['name'],$id);
                    move_uploaded_file($_FILES['image']['tmp_name'],'../content/img/'.$_FILES['image']['name']);
                    header('location: ?mod=user&act=info');
                }
                include_once 'view/template_header.php';
                include_once 'view/page_edit.php';
                include_once 'view/template_footer.php';
            }
        }
?>