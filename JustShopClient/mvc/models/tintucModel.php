<?php
    class tintucModel extends DB{
        function getTinTuc()
        {
            $sql =  "SELECT * FROM tintuc ORDER BY MaTin DESC";
            $result =  mysqli_query($this->con,$sql);
            $arr = array();
            while($row =  mysqli_fetch_array($result))
            {
                $arr[] =  $row;
            }
            return $arr;
        }
       
        function searchID($id)
        {
            $sql= "SELECT * FROM tintuc WHERE MaTin=";
            $sql .= "'".$id."'";
            $sql .= " ORDER BY MaTin DESC";
            $result =  mysqli_query($this->con,$sql);
            $arr = array();
            while($row =  mysqli_fetch_array($result))
            {
                $arr[] =  $row;
            }
            return $arr;

        }
        function getTinTuc2()
        {
            $sql =  "SELECT * FROM tintuc ORDER BY MaTin ASC limit 2";
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