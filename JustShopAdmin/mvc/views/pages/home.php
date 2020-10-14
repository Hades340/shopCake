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
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tháng</th>
                            <th>Số lượng sản phẩm đã bán</th>
                            <th>Số lượng đơn hàng</th>
                            <th>Sản phẩm bán chạy</th>
                            <th>Tổng doanh thu</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                        <th>Tháng</th>
                            <th>Số lượng sản phẩm đã bán</th>
                            <th>Số lượng đơn hàng</th>
                            <th>Sản phẩm bán chạy</th>
                            <th>Tổng doanh thu</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    <?php foreach ($data["data"] as $value) : ?>        
                        <tr>
                            <td><?php echo $value['Ngay']?></td>
                            <td><?php echo $value['SoLuongBan']?></td>
                            <td><?php echo $value['SanPhamBanChay']?></td>
                            <td><?php echo $value['SoLuongDonHang']?></td>
                            <td><?php echo $value['TongDoanhThu']?></td>
                            <td><button class="btn btn-danger mr-3"><a href="<?php?>" style="color:black ">Sửa</a></button>
                                <button class="btn btn-primary"><a href="" style="color:black ">Xóa</a></button></td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
