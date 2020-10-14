<?php

class DB{

    public $con;
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "root";
    protected $dbname = "justshop1";

    function __construct(){
        $this->con = mysqli_connect($this->servername, $this->username, $this->password);
        mysqli_select_db($this->con, $this->dbname);
        mysqli_query($this->con, "SET NAMES 'utf8'");
    }
    function check_error($result)
    {
        $this->con;
        if(!$result)
        {
            echo mysqli_error($this->con);
            $this->con->close();
            exit;
        }
        return $result;
    }

}

?>