<?php
include_once '../model_DAO/user.php';
include 'PHPMailer/Buoi5Mailer.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
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
                    $_SESSION['user']=$data;
                    header('location: ?mod=user&act=login');
                }
                include_once 'view/template_header.php';
                include_once 'view/page_register.php';
                include_once 'view/template_footer.php';
                break;
            case 'edit':
                $user = user_one($id);
                if (isset($edit_submit)){
                    if($_FILES['image']['name']!= null){
                        user_edit($name,$email,$phone,$address,$_FILES['image']['name'],$id);
                        move_uploaded_file($_FILES['image']['tmp_name'],'../content/img/'.$_FILES['image']['name']);
                    }else{
                        user_edit($name,$email,$phone,$address,$user['Anh'],$id);
                    }
                    $_SESSION['user']=user_one($id);
                    header('location: ?mod=user&act=info');
                }
                include_once 'view/template_header.php';
                include_once 'view/page_edit.php';
                include_once 'view/template_footer.php';
                break;
            case 'forget':
                    include_once 'view/template_header.php';
                    include_once 'view/page_forget_pass.php';
                    $length = 6;
                    $random = randomString($length);
                    $rand = $randomValue;
                    $_SESSION['rand_value'] = $rand;
                    
                if (isset($forget_submit)) {
                
                    $check = check_email($email);
                    $_SESSION['mail'] = $email;
                    if ($check) {
                        $context = "$randomValue";
                        sendMail($email, "Reset password", $context);
                        echo '<script>window.location.href = "?mod=user&act=check";</script>';
                    } else {
                        //Ko Thành công
                        echo "Can't change password. Username or password are incorrect !";
                    }
                    
                    }
                    include_once 'view/template_footer.php';
                    
                    break;
                case 'check':
                    include_once 'view/template_header.php';
                    include_once 'view/page_check_code.php';
                    $rand = $_SESSION['rand_value'];
                    // echo $rand;
                    if(isset($check_code)){
                        if($check == $rand){
                            echo '<script>window.location.href = "?mod=user&act=update_user";</script>';
                            // header('location: ?mod=user&act=update_user');
                        }else{
                            echo "bạn đã nhập sai mã";
                        }
                    }
                    
                    include_once 'view/template_footer.php';
                    break;
                case 'update_user':
                    $mail = $_SESSION['mail'];
                    include_once 'view/template_header.php';
                    if(isset($update_pass)){
                        if($pass == $repass){
                            $re_pass = re_pass($pass,$mail);
                        }
                    }
                    include_once 'view/page_update_pass.php';
                    include_once 'view/template_footer.php';
        }
    }
    
?>