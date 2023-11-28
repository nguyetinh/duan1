<div class=" d-flex justify-content-center align-items-center">
            <div class="col-md-4 p-5 ">
                <h3 class="text-center mb-4 text-dark">ĐĂNG NHẬP</h3>
                <form method="post" action="" >
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Địa chỉ email</label>
                        <input type="text" class="form-control border border-primary" name="check" >
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-danger" type="submit" name="check_code">XÁC NHẬN</button>
                    </div>
                </form>
                <div class="mt-3">
                    <p class="mb-0  text-center">Chưa có tài khoản? <a href="?mod=user&act=register"
                            class="text-primary fw-bold">Đăng ký</a></p>
                </div>
                <?php if(isset($data)):?>
                <div class="alert alert-warning" role="alert">
                    <?=$data;?>
                </div>
                <?php endif; unset($data);?>
            </div>

</div>