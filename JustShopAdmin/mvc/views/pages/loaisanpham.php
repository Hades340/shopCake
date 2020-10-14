<div class="container-fluid">
    <h1 class="mt-4">Loại sản phẩm</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Danh sách loại sản phẩm</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i> Loại sản phẩm
        </div>
        <div class="card-body">
        <a href="/LoaiSanPham/ThemLoai" class="btn btn-primary"> Thêm loại sản phẩm</a> <br><br>
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Tên loại</th>
                <th>Trích dẫn</th>
                <th>Ảnh tiêu biểu</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Tên loại</th>
                <th>Trích dẫn</th>
                <th>Ảnh tiêu biểu</th>
                <th>Chức năng</th>
            </tr>
        </tfoot>
        <tbody>
        <?php foreach ($data["dulieu"] as $value) : ?>        
            <tr>
                <td><?php echo $value['TenLoai']?></td>
                <td><?php echo $value['TrichDan']?></td>
                <td> <img src="/public/img/sanpham/<?php echo $value['AnhTieuBieu']?>" alt="" style="width:200px"></td>
                <td class="d-flex">
                    <button class="btn btn-danger mr-3"><a href='/LoaiSanPham/SuaLoai/<?php echo $value['MaLoai']?>' style="color:black ">Sửa</a></button>
                    <button class="btn btn-primary"><a href='/LoaiSanPham/XoaLoai/<?php echo $value['MaLoai']?>'  style="color:black ">Xóa</a></button>
                </td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
    </div>
    
    </div>
</div>
</div>