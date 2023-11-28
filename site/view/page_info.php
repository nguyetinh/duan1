<link rel="stylesheet" href="test.css">
<div class="container my-3">
    <div class="row">
        <div class="col-md-12">
            <h4 class="text-center">THÔNG TIN KHÁCH HÀNG</h4>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-md-6 text-center">
            <img width="200px" src="../content/img/<?=$_SESSION['user']['Anh']?>" alt="">
        </div>
        <div class="col-md-6">
            <p><b>Họ tên: </b><?=$_SESSION['user']['HoTen']?></p>
            <p><b>Email: </b><?=$_SESSION['user']['Email']?></p>
            <p><b>Số điện thoại: </b><?=$_SESSION['user']['SDT']?></p>
            <p><b>Địa chỉ: </b><?=$_SESSION['user']['DiaChi']?></p>
            <div class="row">
                <div class="col-md-4">
                <a href="?mod=user&act=edit&id=<?=$_SESSION['user']['MaKhachHang']?>" class="btn btn-primary">Sửa thông tin</a>
                </div>
                <?php if($_SESSION['user']['Admin']==1): ?> 
                    <div class="col-md-4">
                    <a href="../admin/?mod=statistic&act=list" class="btn btn-success">Trang Admin</a>
                </div>
                <?php endif; ?>
                <div class="col-md-4">
                <a href="?mod=user&act=logout" class="btn btn-danger">Đăng xuất</a>

                </div>
            </div>
        </div>
    </div>
    
        
    </div>
</div>
