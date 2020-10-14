

<form action="/Login/themNV" method="post">
    <div class="form-row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="small mb-1" for="inputFirstName">Tên nhân viên</label>
                <input class="form-control py-4" name='txtTenNV' id="inputFirstName" type="text" placeholder="Tên của bạn" required/>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="small mb-1" for="inputLastName">Tên tài khoản</label>
                <input class="form-control py-4" name="txtTenTK" id="inputLastName" type="text" placeholder="Tên tài khoản" required/>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="small mb-1" for="inputFirstName">Số điện thoại</label>
                <input class="form-control py-4" name="txtSDT" id="inputFirstName" type="number" placeholder="Số điện thoại" required/>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="small mb-1" for="inputLastName">Địa chỉ</label>
                <input class="form-control py-4" name="txtDiaChi" id="inputLastName" type="text" placeholder="Tên tài khoản" required/>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="small mb-1" for="inputPassword">Password</label>
                <input class="form-control py-4" name="txtPass" id="inputPassword" type="password" placeholder="Enter password" required/>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                <input class="form-control py-4" name="txtPassCon" id="inputConfirmPassword" type="password" placeholder="Confirm password" required/>
            </div>
        </div>
    </div>
    <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block" name="btnThem" type="submit">Create Account</button></div>
    <?php if(isset($data['err'])): ?>
        <ul class="text-danger">
            <?php foreach ($data['err'] as $value) {
                if(!empty($value)){
                    echo "<li><i>".$value."</i></li>";
                }

            }?>
        </ul> 
        <?php endif;?>


</form>







                               