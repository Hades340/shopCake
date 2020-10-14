<?php foreach ($data["loaisp"] as $value) :?>
    <div class="col-sm-3 right">
        <div class="big">
            <img class="l1" src="/public/img/Hinh1.png" alt="">
            <div class="new mt-3 mb-3">
                <h4 class="text-center title"><?php echo $value["TenLoai"]?></h4>
                <div class="info">
                    <img src=<?php echo "/public/img/".$value["AnhTieuBieu"]?> alt="" style="width:271px;height:176px">
                    <div class="txt mt-3"><?php echo $value["TrichDan"] ?> </div>
                    <a  class="more text-center btn text-white" href="<?php echo "/SanPham/LoaiSp/".$value["MaLoai"] ?>"><i> Xem thêm</i></a>
                   
                </div>

            </div>
            <img class="l2" src="/public/img/hinh2.png" alt="">
        </div>
    </div>
<?php endforeach;?>