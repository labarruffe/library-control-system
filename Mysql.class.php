<?php

include 'Dbconfig.class.php';

class Mysql extends Dbconfig    {

    function __construct() {
        $dbPara = new Dbconfig();
        $this -> databaseName = $dbPara -> dbName;
        $this -> hostName = $dbPara -> serverName;
        $this -> userName = $dbPara -> userName;
        $this -> passCode = $dbPara -> passCode;
        $dbPara = NULL;
    }

    function dbConnect()    {
        $link=mysqli_connect($this->hostName, $this->userName, $this->passCode, $this->databaseName);
        if ($link)
            return($link);
        return(FALSE);
    }
}
?>