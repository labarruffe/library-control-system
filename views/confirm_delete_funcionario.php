<?php
    include "../models/Funcionario.class.php";

    $id=$_GET['cod_del']; 

    Funcionario::delete($id);  
?>
<p><a href="lista_funcionarios.php">Voltar</a>
