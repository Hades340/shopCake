<div class="container-fluid">
    <h1 class="mt-4">Phản hồi khác hàng</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Danh sách </li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>Bảng danh sách
        </div>
        <div class="card-body">
       
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Tài khoản</th>
                <th>Tên nhân viên</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
               
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Tài khoản</th>
                <th>Tên nhân viên</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
            </tr>
        </tfoot>
        <tbody>
        <?php foreach ($data["data"] as $value) : ?>        
            <tr>
                <td><?php echo $value['TaiKhoan']?></td>
                <td><?php echo $value['TenNV']?></td>
                <td><?php echo $value['SDT']?></td>
                <td><?php echo $value['DiaChi']?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
    </div>
    
    </div>
</div>
</div>