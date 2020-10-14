<?php
    class tintuc extends Controller{
        protected $tintuc;
        function __construct()
        {
            $this->tintuc =  $this->model('tintucModel');
        }
        function Show()
        {
            $this->view("Layout_2",[
                'Page'=>'tintuc',
                'data'=>$this->tintuc->getTinTuc()
            ]);
        }
        function themTin()
        {
            $err =[];
            $ss ='';
            if(empty($_POST['txtTieuDe']))
            {
                $err[]="Tiêu đề trống";
            }
            if(empty($_POST['txtNoiDung']))
            {
                $err="Nội dung trống";
            }
            if(!isset($_POST['btnThem']))
            {
                $this->view('Layout_2',[
                    'Page'=>'tintucAdd',
                ]);
            }
            if(isset($_POST['btnThem'])&& $err == null)
            {
                $rename = md5(md5(time()));
                $name = $_FILES['anhsp']["name"];
                $url =  './public/img/sanpham/'.$name;
                move_uploaded_file($_FILES['anhsp']['tmp_name'], $url);
                //$img = $rename.$name;
                $img = $name;;

                $tintuc = [];
                $tintuc['TieuDe']= $_POST['txtTieuDe'];
                $tintuc['NoiDung']=$_POST['txtNoiDung'];
                $tintuc['Anh']= $img;

                $result = $this->tintuc->addTinTuc($tintuc);
                if($result)
                {
                    $ss = "Thêm tin tức thành công";
                   
                }
                else
                {
                    $err[]="Thêm sản phẩm thất bại";
                }
            }
            $this->view("Layout_2",[
                "Page"=>'tintucAdd',
                'err'=>$err,
                'thanhcong'=>$ss
            ]);
        }

        
        function suaTin($id)
        {
            $err =[];
            $ss ='';
            if(empty($_POST['txtTieuDe']))
            {
                $err[]="Tiêu đề trống";
            }
            if(empty($_POST['txtNoiDung']))
            {
                $err[]="Nội dung trống";
            }
            
            if(!isset($_POST['btnSua']))
            {
                $this->view('Layout_2',[
                    'Page' => 'tintucUpdate',
                    'tintuc'=>$this->tintuc->searchID($id)
                ]);
            }
            if(isset($_POST['btnSua'])&& $err == null)
            {
                $img = "";
                if($_FILES['anhsp']["name"] != null)
                {
                     $rename = md5(md5(time()));
                    $name = $_FILES['anhsp']["name"];
                    $url =  './public/img/sanpham/'.$name;
                    move_uploaded_file($_FILES['anhsp']['tmp_name'], $url);
                    //$img = $rename.$name;
                    $img = $name;
                }
                else
                {
                    $result = $this->tintuc->searchID($id);
                    foreach ($result as $value) {
                        $img = $value['Anh'];
                    }
                }
               

                $tintuc = [];
                $tintuc['MaTin']=$id;
                $tintuc['TieuDe']= $_POST['txtTieuDe'];
                $tintuc['NoiDung']=$_POST['txtNoiDung'];
                $tintuc['Anh']= $img;

                $result = $this->tintuc->updateTinTuc($tintuc);
                if($result)
                {
                   header('Location:/tintuc/Show');
                }
                else
                {
                    $err[]="Thêm sản phẩm thất bại";
                }
            }
            $this->view("Layout_2",[
                "Page"=>"tintucUpdate",
                'err'=>$err,
                'tintuc'=>$this->tintuc->searchID($id)
            ]);
        }
        function xoaTin($id)
        {
            if(!isset($_POST['btnXoa']))
            {
                $this->view("Layout_2",[
                    'Page'=>"tintucRemove",
                    'tintuc'=>$this->tintuc->searchID($id)
                ]);
            }
            else
            {
                $result=$this->tintuc->removeTinTuc($id);
                if($result)
                {
                    header('Location:/tintuc/Show');
                }
            }

        }
    }
?>