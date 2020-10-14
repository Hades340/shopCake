<?php
class TinTuc extends Controller{
    protected $tintuc;
    protected $loaisp;

    function __construct()
    {
        $this->tintuc = $this->model("tintucModel");
        $this->loaisp = $this->model("loaisanphamModel");
    }
    
    function Show(){        
        $this->view("Layout_2",[
            "Page"=>"tintuc",
            "tintuc"=>$this->tintuc->getTinTuc(),
            "loaisp"=>$this->loaisp->getdata(),
            "TieuDe"=>"Tin Tức"
        ]);
    }
    function CTtin($id)
    {
        $this->view("Layout_2",[
            "Page"=>"tinct",
            "loaisp"=>$this->loaisp->getdata(),
            "tinct"=>$this->tintuc->searchID($id),
            "tinthem"=>$this->tintuc->getTinTuc2()
        ]);
    }
}
?>