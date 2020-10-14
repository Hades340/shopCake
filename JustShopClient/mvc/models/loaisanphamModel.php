<?php 
    class loaisanphamModel extends DB{
        function getdata(){
            $query = "SELECT * FROM LoaiSanPham ORDER BY MaLoai DESC LIMIT 3";
            $result =  mysqli_query($this->con,$query);
            $arrs = array();
            while ($row =  mysqli_fetch_array($result)) {
                $arr[] = $row;
            }
           
            return $arr;
        }
        function getfulldata()
        {
            $sql = "SELECT * FROM loaisanpham ";
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