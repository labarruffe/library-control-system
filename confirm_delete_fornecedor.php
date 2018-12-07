<?php
    include "header.php";

    include "Fornecedor.class.php";

    $id=$_GET['cod_del']; 

    Fornecedor::delete($id);  
    
    print('<p><a id="special" href="lista_fornecedores.php">Voltar</a>');

    include "footer.php";

    ?>
