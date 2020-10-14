 <!-- Start body -->
 <div class="container boody">
        <div class="TieuDe bg-white mt-3 d-flex">
            <img class="hm" src="/public/img/Home.png" alt="">
            <img class="hms" src="/public/img/arrowLeft.png" alt="">
            <p class="text-uppercase font-weight-bold Name">Liên hệ</p>
        </div>
        <div class="row mt-3">
            <div class="col-sm-12 ">
                <h4 class=" font-weight-bold text-center mb-3"> Liên hệ</h4>
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <?php if(isset($data["thanhcong"])):?>
                            <p class="text-success"><?php echo $data["thanhcong"]?></p>
                        <?php endif;?>
                        <form class="form-group container" action="/lienhe/Show" method="post">
                            <label for="">Full name / Họ tên</label>
                            <input type="text" name="txtHoTen" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            <br>
                            <label for="">Email</label>
                            <input type="email" name="txtEmail" id="" class="form-control" placeholder="abcxyz@gmail.com" aria-describedby="helpId">
                            <br>
                            <label for="">Telephone / Điện thoại </label>
                            <input type="text" name="txtPhone" id="" class="form-control" placeholder="097365***" aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Help text</small><br><br>
                            <label for="">Tiêu đề</label>
                            <input type="text" name="txtTieuDe" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            <br>
                            <label for="">Content / Nội dung</label>
                            <textarea class="ml-2" name="txtNoiDung" id="" cols="96.8%" rows="3"></textarea> <br> <br>
                            <button type="submit" name="btnGui" class="btn btn-primary">Gửi liên hệ</button>
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


        </div>
    </div>
    <br>
    <!-- End body -->