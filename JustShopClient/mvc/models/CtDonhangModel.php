<?php
    class CtDonhangModel extends DB{
        function getdata()
        {
            $sql = " SELECT * FROM ctdonhang ";
            $result = mysqli_query($this->con,$sql);
            $arr = array();
            while($row = mysqli_fetch_array($result))
            {
                $arr[] =  $row;
            }
            return $arr;
            $this->con->close();
        }
        function addCT($MaDonHang,$MaSp,$SoLuong,$Gia,$GiaTien)
        {
            $query = "INSERT INTO ctdonhang(MaDonHang, MaSp, SoLuong, Gia, GiaTien) VALUES ";
            $query .= "('".$MaDonHang."','".$MaSp."','".$SoLuong."','".$Gia."','".$GiaTien."')";
            $result = mysqli_query($this->con,$query);
            $this->check_error($result);
            return $result;
        }
       
        function searchMaDH($id)
        {
            $query = "SELECT * FROM ctdonhang WHERE ";
            $query.= "MaDonHang = '".$id."'";
            $result = mysqli_query($this->con,$query);
            $arr = array();
            while($row = mysqli_fetch_array($result))
            {
                $arr[] =  $row;
            }
            return $arr;
            $this->con->close();
        }
        function searchMaCT($id)
        {
            $query = "SELECT * FROM ctdonhang WHERE ";
            $query.= "MaCT = '".$id."'";
            $result = mysqli_query($this->con,$query);
            $this->check_error($result);
            $this->con->close();
            return $result;
        }
        function getMaDonHang()
        {
            $query = "SELECT MaDonHang FROM donhang ORDER BY MaDonHang DESC  LIMIT 1";
            $result = mysqli_query($this->con,$query);
            $this->check_error($result);
           
            $madonhang = mysqli_fetch_array($result);
            return $madonhang;
        }
    }
?>