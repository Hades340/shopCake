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
                <th>Tên khách hàng</th>
                <th>Điện thoại</th>
                <th>Email</th>
                <th>Tiêu đề phản hồi</th>
                <th>Nội dung phản hồi</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
            <th>Tên khách hàng</th>
                <th>Điện thoại</th>
                <th>Email</th>
                <th>Tiêu đề phản hồi</th>
                <th>Nội dung phản hồi</th>
            </tr>
        </tfoot>
        <tbody>
        <?php foreach ($data["data"] as $value) : ?>        
            <tr>
                <td><?php echo $value['Ten']?></td>
                <td><?php echo $value['DienThoai']?></td>
                <td><?php echo $value['Email']?></td>
                <td><?php echo $value['TieuDePhanHoi']?></td>
                <td><?php echo $value['NoiDungPhanHoi']?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
    </div>
    
    </div>
</div>
</div>