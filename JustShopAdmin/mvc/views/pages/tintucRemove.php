
<div class="container-fluid">
    <h1 class="mt-4">Tin tức</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Xác nhận xóa tin tức ?</li>
    </ol>
    <div class="mb-4">
    <?php foreach ($data['tintuc'] as $value):?>
        <form action='<?php echo "/tintuc/xoaTin/".$value['MaTin']?>' method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for=""><b>Tiêu đề tin: </b> <?php echo $value['TieuDe']?></label>
            </div>
            <div class="form-group">
                <label for=""><b>Nội dung tin:</b><?php echo $value['NoiDung']?> </label>
            </div>
            <div class="form-group">
                <label for="">Ảnh tiêu biểu:</label> <br> <br>
                <img src="<?php echo "/public/img/sanpham/".$value['Anh']?>" alt="" ><br> <br>
            </div>
            <button type="submit" class="btn btn-primary" name="btnXoa">Xác nhận xóa</button>
        </form>
    <?php endforeach;?>
    </div>
    <a href="/tintuc/Show">Danh sách tin tức</a>
    </div>
   
</div>
</div>
