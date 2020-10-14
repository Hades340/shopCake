<?php
    class HoaDon extends Controller{
        protected $hoadon;
        protected $cthoadon;
        function __construct()
        {
            $this->hoadon = $this->model('donhangModel');
            $this->cthoadon = $this->model('CtDonhangModel');
        }
        function Show()
        {
            $this->view("Layout_2",[
                "Page"=>"donhang",
                "data"=>$this->hoadon->getDonHang()
            ]);
        }
    }
?>