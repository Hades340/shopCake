<div class="container-fluid">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i> DataTable Example
        </div>
        <div class="card-body">
        <a href="/SanPham/ThemSanPham" class="btn btn-primary"> Thêm sản phẩm</a> <br><br>
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Mã loại</th>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh </th>
                <th>Nội dung</th>
                <th>Mô tả</th>
                <th>Số lượng</th>
                <th>Giá tiền</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Mã loại</th>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh </th>
                <th>Nội dung</th>
                <th>Mô tả</th>
                <th>Số lượng</th>
                <th>Giá tiền</th>
                <th>Chức năng</th>
            </tr>
        </tfoot>
        <tbody>
        <?php foreach ($data["data"] as $value) : ?>        
            <tr>
                <?php foreach ($data["loaisp"] as $vals) :?>
                    <?php if($value['MaLoai'] === $vals["MaLoai"]):?>
                        <td><?php echo $vals['TenLoai']?></td>
                    <?php endif;?>
                <?php endforeach;?>
                <td><?php echo $value['Tensp']?></td>
                <td> <img src="/public/img/sanpham/<?php echo $value['HinhAnh']?>" alt="" style="width:200px"></td>
                <td><?php echo $value['MoTa']?>
                </td> <td><?php echo $value['NoiDung']?></td>
                <td><?php echo $value['SoLuong']?></td>
                <td><?php echo $value['GiaTien']?></td>
                <td class="d-flex"><button class="btn btn-danger mr-3"><a href='/SanPham/SuaSanPham/<?php echo $value['MaSp']?>' style="color:black ">Sửa</a></button>
                    <button class="btn btn-primary"><a href='/SanPham/XoaSanPham/<?php echo $value['MaSp']?>'  style="color:black ">Xóa</a></button></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
    </div>
    
    </div>
</div>
</div>