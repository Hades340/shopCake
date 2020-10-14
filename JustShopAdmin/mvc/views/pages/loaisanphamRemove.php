
<div class="container-fluid">
    <h1 class="mt-4">Loại sản phẩm</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Bạn muốn xóa sản phẩm</li>
    </ol>
   
    
    
    <div class="mb-4">
    <?php foreach ($data['LoaiSanPham'] as $value):?>
        <form action='<?php echo "/LoaiSanPham/XoaLoai/".$value['MaLoai']?>' method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for=""> <b>Loại sản phẩm:</b> <?php echo $value['TenLoai'] ?> </label>
  
            </div>
            <div class="form-group">
                <label for=""><b>Trích dẫn:</b> <?php echo $value['TrichDan']?> </label>
  
            </div>
            <div class="form-group">
                <label for="">Ảnh tiêu biểu:</label> <br> <br>
                <img src="<?php echo "/public/img/sanpham/".$value['AnhTieuBieu']?>" alt="" ><br> <br>
               
            </div>
            <button type="submit" class="btn btn-primary" name="btnXoa">Xác nhận xóa</button>
        </form>
    <?php endforeach;?>
    </div>
   
    <a href="/LoaiSanPham/Show">Danh sách loại sản phẩm</a>
    </div>
   
</div>
</div>
