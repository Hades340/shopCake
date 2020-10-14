<?php
    class sanphamModel extends DB{
        function getdata()
        {
            $query = "SELECT * FROM sanpham ORDER BY Masp DESC LIMIT 8";
            $result = mysqli_query($this->con,$query);
            $arr = array();
            while($row =  mysqli_fetch_array($result))
            {
                $arr[] = $row;  
            }  
            return $arr; 
        }
        function getdata4()
        {
            $query = "SELECT * FROM sanpham ORDER BY Masp DESC LIMIT 4";
            $result = mysqli_query($this->con,$query);
            $arr = array();
            while($row =  mysqli_fetch_array($result))
            {
                $arr[] = $row;  
            }  
            return $arr; 
        }
        function getfulldata()
        {
            $query = "SELECT * FROM sanpham ORDER BY Masp ";
            $result = mysqli_query($this->con,$query);
            $arr = array();
            while($row =  mysqli_fetch_array($result))
            {
                $arr[] = $row;  
            }  
            return $arr; 
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
        function searchSanPhamLoai($id)
        {
            $sql = "SELECT * FROM sanpham ";
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