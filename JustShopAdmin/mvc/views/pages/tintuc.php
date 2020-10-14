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
        <a href="/tintuc/themTin" class="btn btn-primary"> Thêm tin tức mới</a> <br><br>
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Ảnh đại diện</th>
                <th>Tiêu đề</th>
                <th>Nội dung</th>
                <th>Ngày đăng</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        <tfoot>
            <tr>  
                <th>Ảnh đại diện</th>
                <th>Tiêu đề</th>
                <th>Nội dung</th>
                <th>Ngày đăng</th>
                <th>Chức năng</th>
            </tr>
        </tfoot>
        <tbody>
        <?php foreach ($data["data"] as $value) : ?>        
            <tr>
            <td> <img src="/public/img/sanpham/<?php echo $value['Anh']?>" alt="" style="width:200px"></td>
                <td><?php echo $value['TieuDe']?></td>
                <td><?php echo $value['NoiDung']?></td>
                <td><?php $date=date_create($value['NgayDang']); echo date_format($date,"d/m/Y")?></td> 
                <td class="d-flex">
                    <button class="btn btn-danger mr-3"><a href='/tintuc/suaTin/<?php echo $value['MaTin']?>' style="color:black ">Sửa</a></button>
                    <button class="btn btn-primary"><a href='/tintuc/xoaTin/<?php echo $value['MaTin']?>'  style="color:black ">Xóa</a></button>
                </td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
    </div>
    
    </div>
</div>
</div>