<?php
    include "Fornecedor.class.php";

    $id=$_GET['cod_del']; 

    Fornecedor::delete($id);  
?>
<p><a href="index.php">Voltar</a>
