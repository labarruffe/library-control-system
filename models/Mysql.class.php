<?php

class Mysql {

    protected $hostName;
    protected $userName;
    protected $passCode;
    protected $dbName;

    function __construct() {
        $ini = parse_ini_file('../Config.ini');
        $this -> hostName = $ini['db_server'];
        $this -> userName = $ini['db_user'];
        $this -> passCode = $ini['db_password'];
        $this -> dbName = $ini['db_name'];
    }

    function dbConnect()    {
        $link=mysqli_connect($this->hostName, $this->userName, $this->passCode, $this->dbName);
        if ($link)
            return($link);
        return(FALSE);
    }
}
?>