<?php
    class giohang extends Controller{
        protected $donhang;
        protected $ctdonhang;
        function __construct()
        {
            $this->donhang = $this->model("donhangModel");
            $this->ctdonhang = $this->model("CtDonhangModel");
        }
        function Show()
        {
            $err=[];
            $ss = "";
           if(isset($_POST["data"]))
           {
                $getct = json_decode($_POST["data"],true);
           }
           
            if(!isset($_POST["ThanhToan"]))
            {
                $this->view("Layout_2",[
                    "Page"=>"GioHang"
                ]);
            }
            if(empty($_POST["txtHoTen"]))
            {
                $err[]="Tên trống";
            }
            if(empty($_POST["txtEmail"]))
            {
                $err[]="Email trống";
            }
            if(empty($_POST["txtSDT"]))
            {
                $err[]="Số điện thoại trống";
            }
            if(empty($_POST["txtDiaChi"]))
            {
                $err[]="Địa chỉ trống";
            }
            if(isset($_POST["ThanhToan"])&& $err == null)
            {
                $donhang=[];
                $donhang["TenKH"] = $_POST["txtHoTen"];
                $donhang["SDT"] = $_POST["txtSDT"];
                $donhang["DiaChi"]=$_POST["txtDiaChi"];
                $donhang["SoLuong"]=$_POST["tongsl"];
                $donhang["TongTien"] = $_POST["tongtien"];
                $result = $this->donhang->addDonHang($donhang);
                if($result)
                {   
                      $madonhang = $this->ctdonhang->getMaDonHang();
                      foreach ($getct as $value) {  
                          $tong=$value["soluong"] * $value["gia"];
                        $res= $this->ctdonhang->addCT($madonhang[0],$value["id"],$value["soluong"],$value["gia"],$tong);
                      } 
                      if($res)
                      {
                          $ss = "Thanh toán thành công";
                      }
                    

                }
               
            }
            $this->view("Layout_2",[
                "Page"=>"GioHang",
                "err"=>$err,
                "thanhcong"=>$ss
            ]);
        }
        
    }
?>