<?php
    class lienhe extends Controller
    {
        protected $lienhe;
        function __construct()
        {
            $this->lienhe = $this->model("phanhoiModel");
        }
        function Show()
        {
            $err = [];
            $sussess = '';
            if(empty($_POST["txtHoTen"]))
            {
                $err[]="Bạn chưa nhập họ tên";
            }
            if(empty($_POST["txtEmail"]))
            {
                $err[]="Bạn chưa nhập email";
            }
            if(empty($_POST["txtPhone"]))
            {
                $err[]="Bạn chưa nhập số điện thoại";
            }
            if(empty($_POST["txtTieuDe"]))
            {
                $err[]="Tiêu đề trống";
            }
            if(empty($_POST["txtNoiDung"]))
            {
                $err[]="Nội dung trống";
            }

            if(!isset($_POST["btnGui"]))
            {
                 $this->view("Layout_2",[
                "Page"=>"lienhe"
                ]);
            }
            if(isset($_POST["btnGui"])&& $err == null)
            {
                $phanhoi = [];
                $phanhoi["Ten"] = $_POST["txtHoTen"];
                $phanhoi["Email"] = $_POST["txtEmail"];
                $phanhoi["DienThoai"] = $_POST["txtPhone"];
                $phanhoi["TieuDePhanHoi"] = $_POST["txtTieuDe"];
                $phanhoi["NoiDungPhanHoi"] = $_POST["txtNoiDung"];
                $result = $this->lienhe->addPhanHoi($phanhoi);
                if($result)
                {
                    $sussess="Gửi thông tin thành công";
                }
                else
                {
                    $err[]="Gửi thông tin thất bại";
                }
            }
            $this->view("Layout_2",[
                "Page"=>"lienhe",
                "err"=>$err,
                "thanhcong"=>$sussess
            ]);
           
        }
    }
?>