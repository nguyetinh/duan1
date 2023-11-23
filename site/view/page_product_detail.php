<div class="container">
    <div class="row ">
        
        <div class="col-md-6 text-center">
            <img class="img-fluid"
                src="../content/img/<?=$product_detail['HinhAnh'] ?>"
                alt="" style="height: 500px;">
        </div>
        <div class="col-md-6">
            <h1><?=$product_detail['TenSanPham'] ?></h1>
            <p>Hàng chính hãng</p>
            <p>Giá khuyến mãi: <?=$product_detail['GiaKhuyenMai'] ?> đ</p>
            <p>Giá gốc: <?=$product_detail['Gia'] ?> đ </p>
            <p>Size: </p>
            <div class="d-flex flex-row mb-3">
                <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked>
                <label class="btn btn-outline-secondary me-2" for="option1">S</label>

                <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
                <label class="btn btn-outline-secondary me-2" for="option2">M</label>

                <input type="radio" class="btn-check" name="options" id="option3" autocomplete="off">
                <label class="btn btn-outline-secondary me-2" for="option3">L</label>

                <input type="radio" class="btn-check" name="options" id="option4" autocomplete="off">
                <label class="btn btn-outline-secondary me-2" for="option4">XL</label>
            </div>
            <p>Màu:</p>
            <div class="d-flex flex-row mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                    <label class="me-2">Màu xanh</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                    <label class="me-2">Màu đỏ</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" >
                    <label class="me-2">Màu vàng</label>

                  </div>
            </div>
            <form method="post" action="?mod=cart&act=add&id=<?=$id?>">
            <p>Số lượng: <input type="number" value=1 width="10px" name="SoLuong">  </p>
            <input type=submit class="btn btn-danger" name="product_add" value="Mua ngay">
            </form>
        </div>
       
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 text-center">
            <br>
            <h2>Hướng dẫn đo size dây chuyền và nhẫn</h2>
            <img src="../content/img/sizeday.png" width="50%"><br><br>
            <img src="../content/img/sizenhan.jpg" width="50%">
        </div>
        <div class="col-md-1"></div>
    </div>
</div>