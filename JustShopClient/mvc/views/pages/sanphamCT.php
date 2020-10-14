<!-- Start body -->
<div class="container boody">
        <div class="TieuDe bg-white mt-3 d-flex">
            <img class="hm" src="/public/img/Home.png" alt="">
            <p class="text-uppercase font-weight-light Name"> Sản phẩm</p>
            <img class="hms" src="/public/img/arrowLeft.png" alt="">
            <p class="text-uppercase font-weight-bold Name">Chi tiết sản phẩm</p>
        </div>
        <div class="row mt-3">
            <div class="col-sm-12 mt-3">
                <div class="row" id="sp-1">
                <?php foreach ($data["sanpham"] as $value):?>
                    <div class="col-sm-3" style="margin-left: 65px;">
                        <img src="<?php echo "/public/img/".$value["HinhAnh"] ?>" alt="" style="width:290px">
                    </div>
                    <div class="col-sm-4 thangiua">
                        <h3 class="tensp mb-3 tt"> <?php echo $value["Tensp"]?></h3>
                        <div class="d-flex  justify-content-between mb-2">
                            <p class="font-weight-bold ">Giá khuyến mãi:</p>
                            <p class="gia"><?php echo $value["GiaTien"]?></p>
                        </div>
                        <p class="font-weight-bold">Mô tả:</p>
                        <p class="ndct"><?php echo $value["MoTa"]?></p>
                    </div>
                    <div class="col-sm-4">
                        <input class="nhap" type="number" name="" id="" value=1><br>
                        <button class="btn btn-success mt-3 themsp font-weight-bold adds" maid='1'>Thêm vào giỏ</button><br>
                        <button class="btn btn-danger mt-3 muasp font-weight-bold">Mua ngay</button>
                    </div>
                    <div class="CTSP mt-3" style="margin-left: 65px;">
                        <ul class="nav nav-tabs" id="navId">
                            <li class="nav-item">
                                <a href="#tab1Id" class="nav-link active font-weight-bold">Chi tiết </a>
                            </li>
                        </ul>
                        <div class="cttin ml-3 mt-2">
                            <?php echo $value["NoiDung"]?>
                        </div>
                    </div>
                <?php endforeach;?>
                    <div class="splienquan mt-3" style="margin-left: 65px;">
                        <h4 class="text-center font-weight-bold mb-3">SẢN PHẨM LIÊN QUAN</h4>
                        <div class="row ml-3">
                        <?php foreach ($data["spThem"] as $value):?>
                          
                            <div class="card text-left item ml-3">
                                <img class="card-img-top picture" src="<?php echo "/public/img/".$value["HinhAnh"] ?>" alt="">
                                <div class="card-body bd">
                                    <a href="<?php echo "/sanpham/ctsp/".$value["MaSp"]?>">
                                        <h5 class="card-title title tt "><?php echo $value["Tensp"]?></h5>
                                    </a>
                                    <a href="<?php echo "/sanpham/ctsp/".$value["MaSp"]?>">
                                        <p class="card-text price"><?php echo $value["GiaTien"]?> Đ</p>
                                    </a>
                                    <a href="<?php echo "/sanpham/ctsp/".$value["MaSp"]?>">
                                        <p class="card-text information">
                                        <?php echo $value["MoTa"]?>
                                        </p>
                                    </a>

                                </div>
                                <input class="add" type="button" value="Thêm vào giỏ">
                            </div>
                        <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>>
    <!-- End body -->