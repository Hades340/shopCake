<?php
    class sanphamModel extends DB{
        function getdata()
        {
            $query = "SELECT * FROM SanPham";
            $result = mysqli_query($this->con,$query);
            $arr = array();
            while($row =  mysqli_fetch_array($result))
            {
                $arr[] = $row;  
            }  
            return $arr; 
        }
        function addSanPham($sanpham)
        {
            $query = "INSERT INTO sanpham(MaLoai, Tensp, HinhAnh, NoiDung, MoTa,SoLuong, GiaTien) VALUES ";
            $query .= "('".$sanpham['MaLoai']."','".$sanpham['Tensp']."','".$sanpham['HinhAnh']."','".$sanpham['NoiDung']."','".$sanpham['MoTa']."','".$sanpham['SoLuong']."','".$sanpham["GiaTien"]."')";
            $result = mysqli_query($this->con,$query);
            $this->check_error($result);
            return $result;
        }
        function updateSanPham($sanpham)
        {
            $query = "UPDATE sanpham SET ";
            $query .= "MaLoai='".$sanpham['MaLoai']."',Tensp='".$sanpham['Tensp']."',HinhAnh='".$sanpham['HinhAnh']."',NoiDung='".$sanpham['NoiDung']."',MoTa='".$sanpham['MoTa']."',SoLuong='".$sanpham['SoLuong']."',GiaTien='".$sanpham['GiaTien']."' WHERE MaSp='".$sanpham['MaSp']."'";
            $result = mysqli_query($this->con,$query);
            $this->check_error($result);
            return $result;
        }
        function removeSanPham($id)
        {
            $sql = "DELETE FROM sanpham WHERE MaSp =";
            $sql .= "'".$id."'";
            $result = mysqli_query($this->con,$sql);
            $this->check_error($result);
            return $result;
        }
        function searchSanPham($id)
        {
            $sql = "SELECT * FROM sanpham ";
            $sql .= "WHERE MaSp = '".$id."'";
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