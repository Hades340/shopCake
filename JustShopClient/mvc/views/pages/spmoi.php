
<?php foreach ($data["sp"] as $key => $value): ?>
<div class="col-sm-3">
    <div class="card text-left item" id="sp-<?php echo $value["MaSp"]?>">
        <img class="card-img-top picture" src="<?php echo "/public/img/".$value["HinhAnh"] ?>" alt="">
        <div class="card-body bd">
            <a href="<?php echo "/sanpham/ctsp/".$value["MaSp"]?>">
                <h5 class="card-title title tt "> <?php echo $value["Tensp"] ?> </h5>
            </a>
            <a href="<?php echo "/sanpham/ctsp/".$value["MaSp"]?>">
                <p class="card-text price"><span class="gia"> <?php echo $value["GiaTien"]?> </span> Đ</p>
            </a>
            <a href="<?php echo "/sanpham/ctsp/".$value["MaSp"]?>">
                <p class="card-text information"> <?php echo $value["MoTa"]?>
                </p>
            </a>

        </div>
        <input class="add adds" maid='<?php echo $value["MaSp"]?>' type="button" value="Thêm vào giỏ">
    </div>
</div>
<?php endforeach;?>