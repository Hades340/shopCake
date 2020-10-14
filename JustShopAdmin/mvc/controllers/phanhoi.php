<?php
    class phanhoi extends Controller{
        protected $phanhoi;
        function __construct()
        {
            $this->phanhoi = $this->model('phanhoiModel');
        }
        function Show()
        {
            $this->view("Layout_2",[
                'Page'=>'phanhoi',
                "data"=> $this->phanhoi->getPhanHoi()
            ]);
        }
    }
?>