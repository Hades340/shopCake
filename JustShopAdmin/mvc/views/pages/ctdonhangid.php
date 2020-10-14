<div class="container-fluid">
    <h1 class="mt-4">Hóa đơn bán</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Chi tiết hóa đơn bán</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>Bảng chi tiết
        </div>
        <div class="card-body">
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Tên khách hàng</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng </th>
                <th>Giá</th>
                <th>Giá tiền </th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Tên khách hàng</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng </th>
                <th>Giá</th>
                <th>Giá tiền </th>
            </tr>
        </tfoot>
        <tbody>
        <?php foreach ($data["data"] as $value) : ?>        
            <tr>
                <td>
                <?php 
                    foreach ($data['donhang'] as $values) {
                        if($values['MaDonHang'] == $value['MaDonHang']){
                             echo $values['TenKH'];
                        }   
                    }
                ?>
                </td>
                <td>
                <?php 
                    foreach ($data['sanpham'] as $valuess) {
                        if($valuess['MaSp'] == $value['MaSp']){
                             echo $valuess['Tensp'];
                        }   
                    }
                ?>
                <td><?php echo $value['SoLuong']?></td> 
                <td><?php echo $value['Gia']?></td>
                <td><?php echo $value['GiaTien']?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
       
    </table>
    </div>
    </div> 
    
</div>
<a href="/HoaDon/Show" class="text-dark"><button class="btn btn-success">Đơn hàng</button></a>
</div>