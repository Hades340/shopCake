<?php
    class SanPham extends Controller{
        protected $sanpham ;
        protected $loaisp;
        function __construct()
        {
            $this->loaisp =  $this->model("loaisanphamModel");
            $this->sanpham =  $this->model("sanphamModel");
        }
        function Show()
        {
            $this->view("Layout_2",[
                "Page"=>"sanpham",
                'data'=> $this->sanpham->getdata(),
                'loaisp'=>$this->loaisp->getdata()
            ]);
        }
      
        function ThemSanPham()
        {
            $err = [];
           
            if(empty($_POST['txtNoiDung']))
            {
                $err[]="Nội dung trống";
            }
            if(empty($_POST['txtMoTa']))
            {
                $err[]="Mô tả trống";
            }
            if(empty($_POST['txtTenSp']))
            {
                $err[]="Tên sản phẩm trống";
            }
            if(empty($_POST['txtGiaTien']))
            {
                $err[]="Giá tiền trống";
            }
            if(empty($_POST['txtSoLuong']))
            {
                $err[]="Số lượng trống";
            }
            if(!isset($_POST['btnThem']))
            {
                $this->view("Layout_2",[
                "Page"=>"ThemSanPham",
                'loaisp'=>$this->loaisp->getdata()
                ]); 
            }

            // Check if image file is a actual image or fake image
          
            if(isset($_POST['btnThem'])&& $err == null)
            {   
                $rename = md5(md5(time()));
                $name = $_FILES['anhsp']["name"];
                $url =  './public/img/sanpham/'.$rename.$name;
                //$url =  './public/img/sanpham/'.$rename.$name;
                move_uploaded_file($_FILES['anhsp']['tmp_name'], $url);
                //$img = $rename.$name;;
                $img = $name;
                $ten = $_POST['txtTenSp'];
                $giatien = $_POST['txtGiaTien'];
                $noidung = $_POST['txtNoiDung'];
                $mota = $_POST['txtMoTa'];
                $loaisp =  $_POST['drlLoaiSanPham'];
                $soluong = $_POST['txtSoLuong'];
               
                $sanpham = [];
                $sanpham['MaLoai'] = $loaisp;
                $sanpham['Tensp'] = $ten;
                $sanpham['HinhAnh'] = $img;
                $sanpham['NoiDung'] = $noidung;
                $sanpham['MoTa'] = $mota;
                $sanpham['SoLuong'] = $soluong;
                $sanpham['GiaTien'] = $giatien;
                $result = $this->sanpham->addSanPham($sanpham);
                if($result)
                {
                   header("Location:/SanPham/Show");
                }
                else
                {
                    $err[]="Thêm sản phẩm không thành công";
                   
                } 
               

            } 
            $this->view("Layout_2",[
                "Page"=>"ThemSanPham",
                'loaisp'=>$this->loaisp->getdata(),
                'err'=>$err
            ]);
        
           

        }
        function XoaSanPham($id)
        {
            if(!isset($_POST['btnXoa']))
            {
                $this->view("Layout_2",[
                "Page"=>"XoaSanPham",
                'loaisp'=>$this->loaisp->getdata(),
                'sanpham'=>$this->sanpham->searchSanPham($id)
                ]); 
            }
            if(isset($_POST['btnXoa']))
            {
                $result = $this->sanpham->removeSanPham($id);
                if($result)
                {
                    header("Location:/SanPham/Show");
                }
                
            }
        }
        function SuaSanPham($id)
        {
            $err = [];
           
            if(empty($_POST['txtNoiDung']))
            {
                $err[]="Nội dung trống";
            }
            if(empty($_POST['txtMoTa']))
            {
                $err[]="Mô tả trống";
            }
            if(empty($_POST['txtTenSp']))
            {
                $err[]="Tên sản phẩm trống";
            }
            if(empty($_POST['txtGiaTien']))
            {
                $err[]="Giá tiền trống";
            }
            if(empty($_POST['txtSoLuong']))
            {
                $err[]="Số lượng trống";
            }
            if(!isset($_POST['btnSua']))
            {
                $this->view("Layout_2",[
                "Page"=>"SuaSanPham",
                'loaisp'=>$this->loaisp->getdata(),
                'sanpham'=>$this->sanpham->searchSanPham($id)
                ]); 
            }
            if(isset($_POST['btnSua']) &&  $err == null)
            {
                $img = "";
                if($_FILES['anhsp']["name"] != null)
                {   $rename = md5(md5(time()));
                    $name = $_FILES['anhsp']["name"];
                    $url =  './public/img/sanpham/'.$rename.$name;
                    //$url =  './public/img/sanpham/'.$rename.$name;
                    move_uploaded_file($_FILES['anhsp']['tmp_name'], $url);
                    //$img = $rename.$name;
                    $img = $name;
                }
                else
                {   
                   $result =  $this->sanpham->searchSanPham($id);
                   foreach ($result as $value) {
                        $img = $value['HinhAnh'];
                   }
                    
                }
                $ten = $_POST['txtTenSp'];
                $giatien = $_POST['txtGiaTien'];
                $noidung = $_POST['txtNoiDung'];
                $mota = $_POST['txtMoTa'];
                $loaisp =  $_POST['drlLoaiSanPham'];
                $soluong = $_POST['txtSoLuong'];
               
                $sanpham = [];
                $sanpham['MaSp'] = $id;
                $sanpham['MaLoai'] = $loaisp;
                $sanpham['Tensp'] = $ten;
                $sanpham['HinhAnh'] = $img;
                $sanpham['NoiDung'] = $noidung;
                $sanpham['MoTa'] = $mota;
                $sanpham['SoLuong'] = $soluong;
                $sanpham['GiaTien'] = $giatien;
                $result = $this->sanpham->updateSanPham($sanpham);
                if($result)
                {
                   header("Location:/SanPham/Show");
                }
                else
                {
                    $err[]="Thêm sản phẩm không thành công";
                   
                } 
            }
            $this->view("Layout_2",[
                "Page"=>"SuaSanPham",
                'loaisp'=>$this->loaisp->getdata(),
                'sanpham'=>$this->sanpham->searchSanPham($id),
                'err'=>$err
            ]);

        }
    }
?>