<?php
    class Login extends Controller{
        protected $login ;
        function __construct()
        {
            $this->login = $this->model("LoginModel");
        }
        function show()
        {
            $this->view("Layout_1",[
                "Page"=>"Login"
            ]);
        }
        function login()
        {
            $err=[];
            if(empty($_POST['taikhoan']))
            {
                $err[] = "Tài khoản không được để trống";
            }
            if(empty($_POST["matkhau"]))
            {
                $err[] = "Mật khẩu không được để trống";
            }
            if(isset($_POST['check']))
            {
                $username = $_POST["taikhoan"];
                $password = $_POST['matkhau'];
                $result = $this->login->checkLogin($username,$password);
                if($result > 0)
                {
                    header("Location: /Home/index");
                }
                else
                {
                    $err[]=" Tài khoản hoặc mật khẩu không đúng";
                    $this->view("Layout_1",[
                        "Page"=>"login",
                        "Loi"=>$err
                       
                    ]);
                }
            }
        }

        function NhanVien()
        {
            $this->view("Layout_2",[
                'Page'=>'nhanvien',
                'data'=>$this->login->getdata()
            ]);
        }
        function themNV()
        {
            $err=[];
            if(empty($_POST['txtTenNV']))
            {
                $err[]="Tên nhân viên trống";
            }
            if(empty($_POST['txtTenTK']))
            {
                $err[]="Tên tài khoản trống";
            }
            if(empty($_POST['txtSDT']))
            {
                $err[]="Số điện thoại trống";
            }
            if(empty($_POST['txtDiaChi']))
            {
                $err[]="Địa chỉ  trống";
            }
            if(empty($_POST['txtPass']))
            {
                $err[]="Mật khẩu trống";
            }
            if(empty($_POST['txtPassCon']))
            {
                $err[]="Chưa nhập lại mật khẩu ";
            }
            if(!isset($_POST['btnThem']))
            {
                $this->view("Layout_3",[
                    'Page'=>"nhanvienAdd"
                ]);
            }
            if(isset($_POST['btnThem']) && $err == null)
            {
                if($_POST['txtPass'] == $_POST['txtPassCon'])
                {
                     $user = [];
                    $user['TaiKhoan']= $_POST['txtTenTK'];
                    $user['MatKhau']= $_POST['txtPass'];
                    $user['TenNV']= $_POST['txtTenNV'];
                    $user['SDT']= $_POST['txtSDT'];
                    $user['DiaChi']= $_POST['txtDiaChi'];
                    $result = $this->login->addUser($user);
                    if($result)
                    {
                        header("Location:/Login/NhanVien");
                    }
                }
                else
                {
                    $err[]="Mật khẩu nhập lại không đúng";
                }
               
            }
            $this->view("Layout_3",[
                "Page"=>'nhanvienAdd',
                'err'=>$err
            ]);
        }
    }
?>