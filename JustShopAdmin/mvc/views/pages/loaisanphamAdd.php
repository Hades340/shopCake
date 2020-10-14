
<div class="container-fluid">
    <h1 class="mt-4">Loại sản phẩm</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Thêm loại sản phẩm</li>
    </ol>
    <?php if(isset($data['thanhcong'])):?>
    <p class="text-primary"><?php echo $data['thanhcong']?></p>
    <?php endif;?>
    <div class="mb-4">
        <form action="/LoaiSanPham/ThemLoai" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Loại sản phẩm: </label>
                <input type="text" name="txtLoaisp" id="" class="form-control" placeholder="Tên sản phẩm" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="">Trích dẫn:</label>
                <textarea class="form-control" name="txtTrichDan" id="" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="">Ảnh tiêu biểu:</label>
                <input type="file" class="form-control-file" name="anhsp" id="" placeholder="Hình ảnh cho sản phẩm" aria-describedby="fileHelpId">
                <small id="fileHelpId" class="form-text text-muted">Help text</small>
            </div>
            <button type="submit" class="btn btn-primary" name="btnThem">Thêm loại sản phẩm</button>
        </form>
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
    <a href="/LoaiSanPham/Show">Danh sách loại sản phẩm</a>
    </div>
   
</div>
</div>
