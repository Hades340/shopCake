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
        function addCT($CtHoaDon)
        {
            $query = "INSERT INTO ctdonhang(MaDonHang, MaSp, SoLuong, Gia, GiaTien) VALUES ";
            $query .= "('".$CtHoaDon["MaDonHang"]."','".$CtHoaDon["MaSp"]."','".$CtHoaDon['SoLuong']."','".$CtHoaDon['Gia']."','".$CtHoaDon['GiaTien']."')";
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
    }
?>