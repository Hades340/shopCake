<div class="container-fluid">
    <h1 class="mt-4">Sản phẩm</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Bạn muốn xóa sản phẩm này ?</li>
    </ol>
    <div class="mb-4"> 
    <?php foreach ($data['sanpham'] as $values):?>
        <form action="<?php echo'/SanPham/XoaSanPham/'.$values['MaSp']?>" method="post" enctype="multipart/form-data">
       
            <div class="form-group">
                <label for=""><b> Tên sản phẩm:</b> <?php echo $values["Tensp"]?> </label>
            </div>
            <div class="form-group">
                <label for=""><b> Mô tả: </b> <?php echo $values['MoTa']?></label>
               
            </div>
            
            <div class="form-group">
                <label for=""><b>Giá tiền: </b> <?php echo $values['GiaTien']?> </label>
                
            </div>
            <div class="form-group">
                <label for=""><b>Nội dung: </b><?php echo $values['NoiDung']?> </label>
            </div>
            <div class="form-group">
                <label for=""><b>Số lượng: </b><?php echo $values['SoLuong']?>  </label>

            </div>
            <div class="form-group">
            <label for=""><b>Loại sản phẩm: </b> 
                    <?php foreach ($data['loaisp'] as $value):?>
                         <?php echo $value['MaLoai'] == $values['MaLoai']? $value['TenLoai']:"" ?>
                    <?php endforeach;?>
               </label> <br>
            </div>
            <div class="form-group">
                <label for="">Hình ảnh cho sản phẩm</label> <br> <br>
                <img src="<?php echo "/public/img/sanpham/".$values['HinhAnh']?>" alt="" ><br> <br>
               
                
            </div>
            <button type="submit" class="btn btn-primary" name="btnXoa">Xóa sản phẩm</button>
                    
        </form>
        <?php endforeach;?>
    </div>
    </div>
    <a href="/SanPham/Show">Danh sách sản phẩm</a>
</div>
</div>
