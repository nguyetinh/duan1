<div class="container vh-100 ">
  <h2 class="text-center">SỬA THÔNG TIN</h2>
  <form method="post" action="" enctype="multipart/form-data" class="form p-3">
  <div class="row d-flex justify-content-center align-items-center ">
    <div class="col-md-5 ">
            <div class="form-outline">
                  <label class="form-label mt-3 mb-1" >Họ tên</label>
                  <input name="name" type="text" class="form-control" value="<?=$_SESSION['user']['HoTen']?>" />
            </div>
            <div class="form-outline">
                  <label class="form-label mt-3 mb-1" >Email</label>
                  <input name="email" type="text" class="form-control" value="<?=$_SESSION['user']['Email']?>" />
            </div>
            <div class="form-outline">
                  <label class="form-label mt-3 mb-1" >Địa chỉ</label>
                  <input name="address" type="text" class="form-control" value="<?=$_SESSION['user']['DiaChi']?>" />
            </div>
            <div class="form-outline">
                  <label class="form-label mt-3 mb-1" >Số điện thoại</label>
                  <input name="phone" type="text" class="form-control" value="<?=$_SESSION['user']['SDT']?>"/>
            </div>
            <div class="form-outline">
                  <label class="form-label mt-3 mb-1" >Ảnh đại diện</label>
                  <input name="image" type="file" class="form-control"/>
            </div>
            <div class="text-center fs-1">
          <input name="edit_submit" type="submit" class="btn btn-danger btn-lg" value="Cập nhật thông tin">
            </div>
    </div>
    <div class="col-md-5">
        <img src="../content/img/<?=$_SESSION['user']['Anh']?>" class="img-fluid" alt="Sample image" style="height: 500px;">
    </div>
  </div>
  </form>
</div>
