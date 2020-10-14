<?php
    class donhangModel extends DB{
        function getDonHang()
        {
            $query = "SELECT * FROM donhang";
            $result = mysqli_query($this->con,$query);
            $arr = array();
            while($row = mysqli_fetch_array($result))
            {
                $arr[] =  $row;
            }
            return $arr;
        }
        function addDonHang($donhang)
        {
            $query = "INSERT INTO donhang(TenKH, SDT, DiaChi, SoLuong, TongTien) VALUES ";
            $query .="('".$donhang['TenKH']."','".$donhang['SDT']."','".$donhang['DiaChi']."','".$donhang['SoLuong']."','".$donhang['TongTien']."')";
            $result = mysqli_query($this->con,$query);
            $this->check_error($result);
            $this->con->close();
            return $result;
        }
        function searchDonHang($id)
        {
            $query ="SELECT * FROM donhang WHERE " ;
            $query .= "MaDonHang = '".$id."'";
            $result = mysqli_query($this->con,$query);
            $this->check_error($result);
            $this->con->close();
            return $result;

        }
    }
?>