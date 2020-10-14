<?php
    class phanhoiModel extends DB{
        function getPhanHoi()
        {
            $sql = "SELECT * FROM phanhoi";
            $result = mysqli_query($this->con,$sql);
            $arr = array();
            while($row = mysqli_fetch_array($result))
            {
                $arr[] = $row;
            }
            return $arr;
        }
        function addPhanHoi($phanhoi)
        {
            $sql = "INSERT INTO phanhoi( Ten, Email, DienThoai, TieuDePhanHoi, NoiDungPhanHoi) VALUES ";
            $sql .= "('".$phanhoi['Ten']."','".$phanhoi['Email']."','".$phanhoi['DienThoai']."','".$phanhoi['TieuDePhanDoi']."','".$phanhoi['NoiDungPhanHoi']."')";
            $result = mysqli_query($this->con,$sql);
            $this->check_error($result);
            return $result;
        }
    }
?>