<?php 
    class sanpham extends Controller{
        protected $sanpham;
        protected $loaisp;
        function __construct()
        {
            $this->sanpham = $this->model("sanphamModel");
            $this->loaisp = $this->model("loaisanphamModel");
        }
        function Show()
        {
            $this->view("Layout_2",[
                "Page"=>"sanpham",
                "sanpham"=>$this->sanpham->getfulldata(),
                "loaisp"=>$this->loaisp->getfulldata()
            ]);
        }
        function ctsp($id)
        {
            $this->view("Layout_2",[
                "Page"=>"sanphamCT",
                "sanpham"=>$this->sanpham->searchSanPham($id),
                "spThem"=>$this->sanpham->getdata4()
            ]);
        }
        function LoaiSp($id)
        {
            $this->view("Layout_2",[
                "Page"=>"sanpham",
                "sanpham"=>$this->sanpham->searchSanPhamLoai($id),
                "loaisp"=>$this->loaisp->getfulldata()
            ]);
        }
    }
?>