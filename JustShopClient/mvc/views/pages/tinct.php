<!-- Start body -->
<div class="container TinTuc">
        <div class="TieuDe bg-white mt-3 d-flex">
            <img class="hm" src="/public/img/Home.png" alt="">
            <p class="text-uppercase font-weight-light Name"> Tin tức</p>
            <img class="hms" src="/public/img/arrowLeft.png" alt="">
            <p class="text-uppercase font-weight-bold Name">Chi tiết tin</p>
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
            <div class="col-sm-7 bodyRight">
                <?php foreach ($data["tinct"] as  $value):?>

                <div class="cttins">
                    <h4 class="font-weight-bold ttd"><?php echo $value["TieuDe"]?></h4>
                    <p><?php echo $value["NoiDung"]?></p>
                </div>
                <?php endforeach;?>
                <h4 class="text-uppercase font-weight-bold text-center mb-3"> Tin tức</h4>
                <?php foreach ($data["tinthem"] as $value):?>
                    <div class="nd ">
                        <div class=" text-left tt1">
                            <a href="<?php echo "/TinTuc/CTtin/".$value["MaTin"]?>" ><img class="card-img-top" src="<?php echo "/public/img/".$value["Anh"] ?>" alt="" style="border:7px solid white;width:100%;height:190px"></a>
                            <div class="mt-2" style="background-color: transparent;">
                                <a class="ND" href="<?php echo "/TinTuc/CTtin/".$value["MaTin"]?>">
                                    <h5 class=" font-weight-bold mb-2"><?php echo $value["TieuDe"]?></h5>
                                </a>
                                <div class="lich d-flex mb-1"><img src="/public/img/Lich.png" alt="">
                                    <p class="Info"><?php echo $value["NgayDang"]?></p>
                                </div>
                                <a class="ND1" href="<?php echo "/TinTuc/CTtin/".$value["MaTin"]?>">
                                    <p class=" font-weight-light">Xem Thêm ....</p>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>

        </div>
    </div>
    <!-- End body -->