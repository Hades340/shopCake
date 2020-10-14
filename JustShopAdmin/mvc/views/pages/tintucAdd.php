
<div class="container-fluid">
    <h1 class="mt-4">Tin tức</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Thêm tin tức mới</li>
    </ol>
    <?php if(isset($data['thanhcong'])):?>
    <p class="text-primary"><?php echo $data['thanhcong']?></p>
    <?php endif;?>
    <div class="mb-4">
        <form action="/tintuc/themTin" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Tiêu đề tin: </label>
                <input type="text" name="txtTieuDe" id="" class="form-control" placeholder="Tiêu đề tin" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="">Nội dung tin:</label>
                <textarea class="form-control" name="txtNoiDung" id="" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="">Ảnh đại diện tin tức:</label>
                <input type="file" class="form-control-file" name="anhsp" id="" placeholder="Hình ảnh cho sản phẩm" aria-describedby="fileHelpId">
                <small id="fileHelpId" class="form-text text-muted">Help text</small>
            </div>
            <button type="submit" class="btn btn-primary" name="btnThem">Thêm tin tức</button>
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
    </div>
    <a href="/tintuc/Show">Danh sách tin tức</a>
</div>
</div>
