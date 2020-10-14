<?php
    class thongkeModel extends DB{
       
        function getdata()
        {
            $query = "SELECT * FROM thongke";
            $result =  mysqli_query($this->con,$query);
            $arr = array();
            while($rows = mysqli_fetch_array($result))
            {
                $arr[] = $row;
            }
            return $arr;
            $this->con->close();
        }
    }
?>