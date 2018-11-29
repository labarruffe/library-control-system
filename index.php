<p><a href="mostra.php">Mostrar Funcionários</a>

<?php

if($_POST) {
    include "Mysql.class.php";

    $mysql = new Mysql();

    $mysql->dbConnect();

}
?>