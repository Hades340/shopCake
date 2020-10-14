<?php 
    class loaisanphamModel extends DB{
        function getdata(){
            $query = "SELECT * FROM LoaiSanPham";
            $result =  mysqli_query($this->con,$query);
            $arr = array();
            while ($row =  mysqli_fetch_array($result)) {
                $arr[] = $row;
            }
            return $arr;
        }
        function addLoai($loaisp)
        {
            $query = "INSERT INTO loaisanpham(TenLoai, TrichDan, AnhTieuBieu) VALUES ";
            $query .="('".$loaisp['TenLoai']."','".$loaisp['TrichDan']."','".$loaisp['AnhTieuBieu']."')";
            $result = mysqli_query($this->con,$query);
            $this->check_error($result);
            return $result;
        }
        function updateLoai($loaisp)
        {
            $query="UPDATE loaisanpham SET "; 
            $query .="TenLoai='".$loaisp['TenLoai']."',TrichDan='".$loaisp['TrichDan']."',AnhTieuBieu='".$loaisp['AnhTieuBieu']."' WHERE  MaLoai='".$loaisp['MaLoai']."'";
            $result = mysqli_query($this->con,$query);
            $this->check_error($result);
            return $result;
        }
        function remove($id)
        {
            $query="DELETE FROM loaisanpham WHERE ";
            $query .= "MaLoai = '".$id."' ";
            $result = mysqli_query($this->con,$query);
            $this->check_error($result);
            return $result;
        }
        function searchLoaiSanPham($id)
        {
            $sql = "SELECT * FROM loaisanpham ";
            $sql .= "WHERE MaLoai = '".$id."'";
            $result = mysqli_query($this->con,$sql);
            $this->check_error($result);
            $arr = array();
            while($row =  mysqli_fetch_array($result))
            {
                $arr[] = $row;  
            }  
            return $arr; 
        }
    }
?>