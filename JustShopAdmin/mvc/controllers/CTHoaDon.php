<?php   
    class CTHoaDon extends Controller{
        protected $sanpham;
        protected $donhang;
        protected $ctdonhang;
        function __construct()
        {
            $this->sanpham = $this->model('sanphamModel');
            $this->donhang = $this->model('donhangModel');
            $this->ctdonhang = $this->model('CTDonhangModel');
        }
        function Show()
        {
            $this->view("Layout_2",[
                "Page"=>'ctdonhang',
                'data'=>$this->ctdonhang->getdata(),
                'sanpham'=>$this->sanpham->getdata(),
                'donhang'=>$this->donhang->getDonHang()
            ]);
        }
        function XemChiTiet($id)
        {
            $this->view("Layout_2",[
                "Page"=>'ctdonhangid',
                'data'=>$this->ctdonhang->searchMaDH($id),
                'sanpham'=>$this->sanpham->getdata(),
                'donhang'=>$this->donhang->getDonHang()
            ]);
        }
    }
?>