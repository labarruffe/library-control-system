<?php
    include "Fornecedor.class.php";

    $id=$_GET['cod_del']; 

    Fornecedor::delete($id);  
?>
<p><a href="lista_fornecedores.php">Voltar</a>
