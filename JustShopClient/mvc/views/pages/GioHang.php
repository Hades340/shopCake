 <!-- Start body -->
 <div class="container TinTuc">
        <div class="TieuDe bg-white mt-3 d-flex">
            <img class="hm" src="/public/img/Home.png" alt="">
            <img class="hms" src="/public/img/arrowLeft.png" alt="">
            <p class="text-uppercase font-weight-bold Name">Giỏ hàng</p>
        </div>
        <div class="row mt-3">

            <div class="col-sm-7 bodyLeft mb-3">
                <h5 class="text-uppercase font-weight-bold text-center mb-3">Sản phẩm của bạn</h5>
                <table class="table table-striped table-inverse ">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Ảnh</th>
                            <th>Sản phẩm </th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody id="dsgiohang">

                    </tbody>
                </table>



            </div>
            <div class="col-sm-4  bodyRight">
            <?php if(isset($data["thanhcong"])):?>
                <p class="text-success"><?php echo  $data["thanhcong"]; ?></p>
            <?php endif;?>
                <br>
                <br>
                <form class="form-group container" action="/giohang/Show" method="post">
                    <label for="">Full name / Họ tên</label>
                    <input type="text" name="txtHoTen" id="" class="form-control" placeholder="" aria-describedby="helpId">

                    <label class="mt-1" for="">Email</label>
                    <input type="email" name="txtEmail" id="" class="form-control" placeholder="abcxyz@gmail.com" aria-describedby="helpId">

                    <label class="mt-1" for="">Telephone / Điện thoại </label>
                    <input type="text" name="txtSDT" id="" class="form-control" placeholder="097365***" aria-describedby="helpId">

                    <label class="mt-1" for="">Địa chỉ</label>
                    <input type="text" name="txtDiaChi" id="" class="form-control" placeholder="Thanh trì - Hà Nội" aria-describedby="helpId">
                    <br><br>

                    <label for="">Tổng tiền:</label>
                    <input type="text" name="tongtien" id="tongtien"  class="font-weight-bold " readonly>
                    <input type="text" name="tongsl" id="tongsl" readonly style="opacity:0;">
                    <input type="text" id="data" name="data" readonly style="opacity:0;">
                    <br>
                    <br>
                    <button type="submit" name="ThanhToan" class="btn btn-outline-primary">Thanh toán</button>
                </form>
            </div>
            <?php if(isset($data["err"])):?>
                    <ul class="text-danger">
                        <?php foreach ($data["err"] as $value) {
                           if(isset($value))
                           {
                               echo "<li><i>".$value."</i></li>";
                           }
                        }?>
                    </ul>
                    <?php endif;?>
        </div>
    </div>
    <!-- End body -->