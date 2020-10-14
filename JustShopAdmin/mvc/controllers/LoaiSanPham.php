<?php 
    class LoaiSanPham extends Controller{
        protected $loaisp;
        function __construct()
        {
            $this->loaisp = $this->model("loaisanphamModel");
        }
        function Show()
        {
            $this->view("Layout_2",[
                "Page"=>"loaisanpham",
                "dulieu"=>$this->loaisp->getdata()
            ]);
        }
        function ThemLoai()
        {
            $err=[];
            $ss="";
            if(empty($_POST["txtLoaisp"]))
            {
                $err[]="Tên loại sản phẩm trống";
            }
            if(empty($_POST['txtTrichDan']))
            {
                $err[]="Trích dẫn trống";
            }
            if(!isset($_POST['btnThem']))
            {
                $this->view("Layout_2",[
                    "Page"=>"loaisanphamAdd"
                ]);
            }
            if(isset($_POST['btnThem']) && $err == null)
            {
                $rename = md5(md5(time()));
                $name = $_FILES['anhsp']["name"];
                //$url =  './public/img/sanpham/'.$rename.$name;
                $url =  './public/img/sanpham/'.$name;
                move_uploaded_file($_FILES['anhsp']['tmp_name'], $url);
                //$img = $rename.$name;
                 $img = $name;

                $loaisp=[];
                $loaisp['TenLoai'] = $_POST['txtLoaisp'];
                $loaisp['TrichDan'] = $_POST['txtTrichDan'];
                $loaisp['AnhTieuBieu'] = $img;
                $result = $this->loaisp->addLoai($loaisp);
                if($result)
                {
                    $ss = "Thêm sản phẩm thành công";
                }
                else
                {
                    $err="Thêm sản phẩm thất bại";
                }
            }
            $this->view("Layout_2",[
                "Page"=>"loaisanphamAdd",
                "thanhcong"=>$ss,
                'err'=>$err
            ]);
        }
        function SuaLoai($id)
        {
            $err = [];
            if(!isset($_POST['btnThem']))
            {
                //$this->loaisp->searchLoaiSanPham($id);
                $this->view("Layout_2",[
                    "Page"=>"loaisanphamUpdate",
                    "LoaiSanPham"=>$this->loaisp->searchLoaiSanPham($id)
                ]);
            }
            if(empty($_POST['txtLoaisp']))
            {
                $err[]="Loại sản phẩm trống";
            }
            if(empty($_POST['txtTrichDan']))
            {
                $err[] = "Trích dẫn trống";
            }
            if(isset($_POST['btnThem']) && $err == null)
            {
                $img = "";
                if($_FILES['anhsp']["name"] != null)
                {   $rename = md5(md5(time()));
                    $name = $_FILES['anhsp']["name"];
                   // $url =  './public/img/sanpham/'.$rename.$name;
                    $url =  './public/img/sanpham/'.$name;
                    move_uploaded_file($_FILES['anhsp']['tmp_name'], $url);
                    //$img = $rename.$name;
                    $img = $name;;
                }
                else
                {
                    $result =  $this->loaisp->searchLoaiSanPham($id);
                    foreach ($result as $value) {
                         $img = $value['AnhTieuBieu'];
                    }
                }
                $loaisp=[];
                $loaisp['MaLoai'] = $id;
                $loaisp['TenLoai'] = $_POST['txtLoaisp'];
                $loaisp['TrichDan'] = $_POST['txtTrichDan'];
                $loaisp['AnhTieuBieu'] = $img;
                $result = $this->loaisp->updateLoai($loaisp);
                if($result)
                {
                    header("Location:/LoaiSanPham/Show");
                }
                else
                {
                    $err[]="Thêm sản phẩm thất bại";
                }
            }
            $this->view("Layout_2",[
                "Page"=>"loaisanphamUpdate",
                'err'=>$err,
                "LoaiSanPham"=>$this->loaisp->searchLoaiSanPham($id)
            ]);

        }
        function XoaLoai($id)
        {
            if(!isset($_POST['btnXoa']))
            {
                $this->view("Layout_2",[
                "Page"=>"loaisanphamRemove",
                'LoaiSanPham'=>$this->loaisp->searchLoaiSanPham($id)
                ]); 
            }
            else
            {
                $result = $this->loaisp->remove($id);
                if($result)
                {
                    header("Location:/LoaiSanPham/Show");
                }
                
            }

        }
    }
?>