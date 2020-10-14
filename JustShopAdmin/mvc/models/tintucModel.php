<?php
    class tintucModel extends DB{
        function getTinTuc()
        {
            $sql =  "SELECT * FROM tintuc";
            $result =  mysqli_query($this->con,$sql);
            $arr = array();
            while($row =  mysqli_fetch_array($result))
            {
                $arr[] =  $row;
            }
            return $arr;
        }
        function addTinTuc($tintuc)
        {
            $sql = "INSERT INTO `tintuc`(`TieuDe`, `NoiDung`,`Anh`) VALUES ";
            $sql .="('".$tintuc['TieuDe']."','".$tintuc['NoiDung']."','".$tintuc['Anh']."')";
            $result =  mysqli_query($this->con, $sql);
            $this->check_error($result);
            return $result;
        }
        function removeTinTuc($id)
        {
            $sql = "DELETE FROM tintuc WHERE ";
            $sql .="MaTin = '".$id."'";
            $result = mysqli_query($this->con,$sql);
            $this->check_error($result);
            return $result;
        }
        function updateTinTuc($tintuc)
        {
            $sql = "UPDATE `tintuc` SET ";
            $sql .="`TieuDe`='".$tintuc['TieuDe']."',`NoiDung`='".$tintuc['NoiDung']."',`Anh`='".$tintuc['Anh']."' WHERE `MaTin`='".$tintuc['MaTin']."'";
            $result = mysqli_query($this->con ,$sql);
            $this->check_error($result);
            return $result;
        }
        function searchID($id)
        {
            $sql= "SELECT * FROM tintuc WHERE MaTin=";
            $sql .= "'".$id."'";
            $result =  mysqli_query($this->con,$sql);
            $arr = array();
            while($row =  mysqli_fetch_array($result))
            {
                $arr[] =  $row;
            }
            return $arr;

        }
    }
?>