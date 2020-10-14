<?php
    class LoginModel extends DB{
        function checkLogin($username,$password)
        {
            $query = "SELECT * FROM taikhoan WHERE ";
            $query .= "TaiKhoan = '".$username."' AND MatKhau = '".$password."'";
            $result = mysqli_query($this->con,$query);
            $row = mysqli_num_rows($result);
            return $row; 
        }
        function addUser($user)
        {
            $query = "INSERT INTO taikhoan(TaiKhoan, MatKhau, TenNV, SDT, DiaChi) VALUES ";
            $query.="('".$user['TaiKhoan']."','".$user['MatKhau']."','".$user['TenNV']."','".$user['SDT']."','".$user['DiaChi']."')";
            $result = mysqli_query($this->con,$query);
            $this->check_error($result);
            return $result;
        }
        function updatePass($user)
        {
            $query = "UPDATE taikhoan SET ";
            $query .= " MatKhau='".$user['MatKhau']."' WHERE  TaiKhoan= '".$user['TaiKhoan']."'";
            $result = mysqli_query($this->con,$query);
            $this->check_error($result);
            return $result;
        }
        function getdata()
        {
            $sql = "SELECT * FROM taikhoan";
            $result = mysqli_query($this->con,$sql);
            $arr = array();
            while ($row = mysqli_fetch_array($result)) {
                $arr[] = $row;
            }
            return $arr;
        }
    }
?>