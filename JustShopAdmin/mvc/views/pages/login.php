
<form action="/Login/login" method="post">
    <div class="form-group">
        <label class="small mb-1" for="inputEmailAddress">Account</label>
        <input class="form-control py-4" name="taikhoan" id="inputEmailAddress" type="text" placeholder="Enter email address" value="<?php echo isset($_POST["taikhoan"])?$_POST["taikhoan"]:""?>"/>
    </div>
    <div class="form-group">
        <label class="small mb-1" for="inputPassword">Password</label>
        <input class="form-control py-4" name="matkhau" id="inputPassword" type="password" placeholder="Enter password" value="<?php echo isset($_POST["matkhau"])?$_POST["matkhau"]:""?>"/>
    </div>
    <div class="form-group">
        <div class="custom-control custom-checkbox">
            <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
            <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
        </div>
    </div>
    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
        <a class="small" href="password.html">Forgot Password?</a><br>
        <button name="check" type="submit" class="btn btn-primary" style="width:100px;">Login</button>
    </div>
    <br>
    <?php if(isset($data['Loi'])):?>
    <ul class="text-danger">
        <?php foreach ($data['Loi'] as $value) {
            if(isset($value))
            {
                echo "<li> <i>".$value."</i></li>";
            }
        }?>
    </ul>
    <?php endif;?>
   
</form>