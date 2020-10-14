<div class="container-fluid">
    <h1 class="mt-4">Sản phẩm</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Thêm sản phẩm</li>
    </ol>
    <div class="mb-4">
    <?php foreach ($data['sanpham'] as $values):?>
        <form action="<?php echo'/SanPham/SuaSanPham/'.$values['MaSp']?>" method="post" enctype="multipart/form-data">
        
            <div class="form-group">
                <label for="">Tên sản phẩm: </label>
                <input type="text" name="txtTenSp" id="" class="form-control" placeholder="Tên sản phẩm" aria-describedby="helpId" value="<?php echo $values["Tensp"]?>">
            </div>
            <div class="form-group">
                <label for="">Mô tả:</label>
                <textarea class="form-control" name="txtMoTa" id="" rows="3" ><?php echo $values['MoTa']?></textarea>
            </div>
            
            <div class="form-group">
                <label for="">Giá tiền: </label>
                <input type="number" name="txtGiaTien" id="" class="form-control" placeholder="Giá sản phẩm" aria-describedby="helpId"  value="<?php echo $values['GiaTien']?>">
            </div>
            <div class="form-group">
                <label for="">Nội dung:</label>
                <textarea class="form-control" name="txtNoiDung" id="" rows="3"><?php echo $values['NoiDung']?></textarea>
            </div>
            <div class="form-group">
                <label for="">Số lượng: </label>
                <input type="number" name="txtSoLuong" id="" class="form-control" placeholder="Số lượng" aria-describedby="helpId" value="<?php echo $values['SoLuong']?>">
            </div>
            <div class="form-group">
            <label for="">Loại sản phẩm: </label> <br>
                <select id="loaisanpham" name="drlLoaiSanPham" style="width:200px;height:30px;"> <br> <br>
                    <?php foreach ($data['loaisp'] as $value):?>
    
                        <option value="<?php echo $value['MaLoai']?>" <?php echo $value['MaLoai'] == $values['MaLoai']? "selected":"" ?>><?php echo $value['TenLoai']?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Hình ảnh cho sản phẩm</label> <br> <br>
                <img src="<?php echo "/public/img/sanpham/".$values['HinhAnh']?>" alt="" ><br> <br>
                <input type="file" class="form-control-file" name="anhsp" id="" placeholder="Hình ảnh cho sản phẩm" aria-describedby="fileHelpId">
                <small id="fileHelpId" class="form-text text-muted">Help text</small>
            </div>
            <button type="submit" class="btn btn-primary" name="btnSua">Sửa sản phẩm</button>
                    
        </form>
        <?php endforeach;?>
    </div>
    <?php if(isset($data['err'])): ?>
    <ul class="text-danger">
        <?php foreach ($data['err'] as $value) {
            if(!empty($value)){
                echo "<li><i>".$value."</i></li>";
            }

        }?>
    </ul> 
    <?php endif;?>
    </div>
    <a href="/SanPham/Show">Danh sách sản phẩm</a>
</div>
</div>
