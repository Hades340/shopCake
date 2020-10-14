
<div class="container-fluid">
    <h1 class="mt-4">Tin tức</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Sửa tin tức</li>
    </ol>
    <div class="mb-4">
    <?php foreach ($data['tintuc'] as $value):?>
        <form action='<?php echo "/tintuc/suaTin/".$value['MaTin']?>' method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Tiêu đề tin: </label>
                <input type="text" name="txtTieuDe" id="" class="form-control" placeholder="Tên sản phẩm" aria-describedby="helpId" value="<?php echo $value['TieuDe'] ?>">
            </div>
            <div class="form-group">
                <label for="">Nội dung tin:</label>
                <textarea class="form-control" name="txtNoiDung" id="" rows="3"><?php echo $value['NoiDung']?></textarea>
            </div>
            <div class="form-group">
                <label for="">Ảnh tiêu biểu:</label> <br> <br>
                <img src="<?php echo "/public/img/sanpham/".$value['Anh']?>" alt="" ><br> <br>
                <input type="file" class="form-control-file" name="anhsp" id="" placeholder="Hình ảnh cho sản phẩm" aria-describedby="fileHelpId">
                <small id="fileHelpId" class="form-text text-muted">Help text</small>
            </div>
            <button type="submit" class="btn btn-primary" name="btnSua">Cập nhật tin tức</button>
        </form>
    <?php endforeach;?>
    </div>
    <?php if(isset($data['err'])): ?>
    <ul class="text-danger">
        <?php foreach($data['err'] as $value) {
            if(!empty($value)){
                echo "<li><i>".$value."</i></li>";
            }

        }?>
    </ul> 
    <?php endif;?> 
    <a href="/tintuc/Show">Danh sách tin</a>
    </div>
   
</div>
</div>
