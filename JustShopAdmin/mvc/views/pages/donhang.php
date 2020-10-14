<div class="container-fluid">
    <h1 class="mt-4">Hóa đơn bán</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Danh sách bảng</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>Bảng hóa đơn
        </div>
        <div class="card-body">
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
            <th>Tên khách hàng</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ </th>
                <th>Số lượng</th>
                <th>Tổng tiền </th>
                <th>Ngày mua</th>
                <th>Xem chi tiết </th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Tên khách hàng</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ </th>
                <th>Số lượng</th>
                <th>Tổng tiền </th>
                <th>Ngày mua</th>
                <th>Xem chi tiết </th>
            </tr>
        </tfoot>
        <tbody>
        <?php foreach ($data["data"] as $value) : ?>        
            <tr>
                <td><?php echo $value['TenKH']?></td>
                <td><?php echo $value['SDT']?></td>
                <td><?php echo $value['DiaChi']?></td> 
                <td><?php echo $value['SoLuong']?></td>
                <td><?php echo $value['TongTien']?></td>
                <td><?php $date=date_create($value['NgayMua']); echo date_format($date,"d/m/Y")?></td>
                <td class="d-flex">
                <button class="btn btn-primary mr-3"><a href='/CTHoaDon/XemChiTiet/<?php echo $value['MaDonHang']?>' style="color:black ">Chi tiết hóa đơn</a></button>
                </td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
    </div>
    </div>
</div>
</div>