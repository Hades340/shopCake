<div class="container boody">
        <div class="TieuDe bg-white mt-3 d-flex">
            <img class="hm" src="/public/img/Home.png" alt="">
            <img class="hms" src="/public/img/arrowLeft.png" alt="">
            <p class="text-uppercase font-weight-bold Name">Sản phẩm</p>
        </div>
        <div class="row mt-3">
            <div class="col-sm-3 bodyLeft">
                <h4 class=" font-weight-bold "> Danh mục</h4>
                <ul class="nav">
                <?php foreach ($data["loaisp"] as $value):?>
                    <li class="nav-item DMli">
                        <a class="nav-link ali" href="<?php echo "/SanPham/LoaiSp/".$value["MaLoai"] ?>"><?php echo $value["TenLoai"]?></a>
                    </li>
                    
                <?php endforeach;?>
                </ul>
            </div>
            <div class="col-sm-8 bodyRight">
                <h4 class="text-uppercase font-weight-bold text-center "> SẢN PHẨM</h4>
                <div class="row cactren">
                    <?php foreach ($data["sanpham"] as $value):?>
                    <div class="card text-left item" id='sp-<?php echo $value["MaSp"]?>'>
                        <img class="card-img-top picture" src="<?php echo "/public/img/".$value["HinhAnh"] ?>" alt="">
                        <div class="card-body bd">
                            <a href="<?php echo "/sanpham/ctsp/".$value["MaSp"]?>">
                                <h5 class="card-title title tt "><?php echo $value["Tensp"]?></h5>
                            </a>
                            <a href="<?php echo "/sanpham/ctsp/".$value["MaSp"]?>">
                                <p class="card-text price"><span class="gia"><?php echo $value["GiaTien"]?></span> Đ</p>
                            </a>
                            <a href="<?php echo "/sanpham/ctsp/".$value["MaSp"]?>">
                                <p class="card-text information">
                                    <?php echo $value["MoTa"]?>
                                </p>
                            </a>

                        </div>
                        <input class="add adds" maid='<?php echo $value["MaSp"]?>' type="button" value="Thêm vào giỏ">
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
    