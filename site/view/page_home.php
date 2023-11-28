
<!-- Banner -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../content/img/banner33.png" class="d-block w-100" alt="..." height="550px">
      </div>
      <div class="carousel-item">
        <img src="../content/img/banner22.png" class="d-block w-100" alt="..." height="550px">
      </div>
      <div class="carousel-item">
        <img src="../content/img/banner11.png" class="d-block w-100" alt="..." height="550px">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<!-- main -->
<main class="container">
    <!-- Catagories -->
    <H4 class="my-3">HOT DEALS</H4>
    <div class="text-center">
        <div class="row">
            <?php foreach ($dsdm as $dm) : ?>
                <div class="col-md-4 position-relative">
                    <img class="img-fluid img-thumbnail" src="../content/img/<?= $dm['HinhAnh'] ?>" height="270px" alt="">
                    <p class="text-danger p-2 bg-white my-2 position-absolute top-50 start-50 fs-6 translate-middle"><?= $dm['TenDanhMuc'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- sale Products -->
    <!-- <H4 class="my-3">SẢN PHẨM BÁN CHẠY</H4>
    <div class="text-center mt-5">
        <div class="row">
            <?php foreach ($sp_hot as $sp) : ?>
                <div class="col-md-3 ">
                    <div class="shadow pb-3 rounded">
                        <a href="?mod=product&act=detail&id="><img class="img-fluid mb-2 rounded-top" src="../content/img/<?= $sp['HinhAnh'] ?>" alt=""></a>
                        <p><b><?= $sp['TenSanPham'] ?></b></p>
                        <span class="text-danger"><?= $sp['Gia'] ?></span> <span> <del><?= $sp['GiaKhuyenMai'] ?></del></span>
                        <p></p>
                        <a href="?mod=cart&act=add&id=<?= $sp['MaSanPham'] ?>" class="btn btn-danger">Thuê ngay</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div> -->
        <hr style="border: 2px solid black;">
        <!-- All categories -->
        <div class="text-center mt-5">
            <div class=" d-flex">
                <H4 class="my-3">ÁO NAM</H4>
                <a href="?mod=page&act=category&id=" class="btn btn-outline-dark my-3 ms-auto">Xem thêm</a>
            </div>
            <div class="row">
            <?php foreach ($dm_nam as $nam) : ?>
                <div class="col-md-3 ">
                    <div class="shadow pb-3 rounded">
                        <a href="?mod=product&act=detail&id=">
                            <img class="img-fluid mb-2 rounded-top" src="../content/img/<?= $nam['HinhAnh'] ?>" alt="">
                        </a>
                        <p><b><?= $nam['TenSanPham'] ?></b></p>
                        <span class="text-danger"><?= $nam['Gia'] ?></span> <span> <del><?= $nam['GiaKhuyenMai'] ?></del></span>
                        <p></p>
                        <a href="?mod=cart&act=add&id=<?= $nam['MaSanPham'] ?>" class="btn btn-danger">Mua ngay</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="text-center mt-5">
            <div class=" d-flex">
                <H4 class="my-3">VÁY NỮ</H4>
                <a href="?mod=page&act=category&id=" class="btn btn-outline-dark my-3 ms-auto">Xem thêm</a>
            </div>
            <div class="row">
            <?php foreach ($dm_nu as $nu) : ?>
                <div class="col-md-3 ">
                    <div class="shadow pb-3 rounded">
                        <a href="?mod=product&act=detail&id=">
                            <img class="img-fluid mb-2 rounded-top" src="../content/img/<?= $nu['HinhAnh'] ?>" alt="">
                        </a>
                        <p><b><?= $nu['TenSanPham'] ?></b></p>
                        <span class="text-danger"><?= $nu['Gia'] ?></span> <span> <del><?= $nu['GiaKhuyenMai'] ?></del></span>
                        <p></p>
                        <a href="?mod=cart&act=add&id=<?= $nu['MaSanPham'] ?>" class="btn btn-danger">Mua ngay</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="text-center mt-5">
            <div class=" d-flex">
                <H4 class="my-3">Thời Trang Trẻ Em</H4>
                <a href="?mod=page&act=category&id=" class="btn btn-outline-dark my-3 ms-auto">Xem thêm</a>
            </div>
            <div class="row">
            <?php foreach ($dm_treem as $baby) : ?>
                <div class="col-md-3 ">
                    <div class="shadow pb-3 rounded">
                        <a href="?mod=product&act=detail&id=">
                            <img class="img-fluid mb-2 rounded-top" src="../content/img/<?= $baby['HinhAnh'] ?>" alt="">
                        </a>
                        <p><b><?= $baby['TenSanPham'] ?></b></p>
                        <span class="text-danger"><?= $baby['Gia'] ?></span> <span> <del><?= $baby['GiaKhuyenMai'] ?></del></span>
                        <p></p>
                        <a href="?mod=cart&act=add&id=<?= $baby['MaSanPham'] ?>" class="btn btn-danger">Mua ngay</a>
                        
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>


</main>

<!-- footer -->
<div class="bg-dark mt-5">
    <div class=" bg-dark p-5 text-center">
        <p for="newsletter1" class="text-white mx-5">Hãy nhập địa chỉ email để nhận được mã giảm giá </p>
        <div class="d-flex justify-content-center">
            <input id="newsletter1" type="text" class="form-control w-25 rounded-0" placeholder="Nhập email của bạn . . .">
            <button class="btn btn-danger bg-opacity-75 rounded-0 " type="button">Đăng ký</button>
        </div>
    </div>
</div>