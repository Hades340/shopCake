<?php
class Home extends Controller{
    protected $show;
    function __construct()
    {
        $this->show = $this->model("thongkeModel");
    }
    function index()
    {
        $this->view("Layout_2",[
            "Page"=>"home",
            "data"=>$this->show->getdata()
        ]);
    }
} 
?>