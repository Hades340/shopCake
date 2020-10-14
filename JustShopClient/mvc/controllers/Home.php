<?php
class Home extends Controller{
    protected $loaisp;
    protected $sanpham;

    function __construct()
    {
        $this->sanpham = $this->model("sanphamModel");
        $this->loaisp = $this->model("loaisanphamModel");
    }
    
    function Show(){        
        $this->view("Layout_1",[
            "Page"=>"dsLoai",
            "NewSP"=>"spmoi",
            "sp"=>$this->sanpham->getdata(),
            "loaisp"=>$this->loaisp->getdata()
        ]);
    }
}
?>