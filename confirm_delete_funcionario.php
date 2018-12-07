<?php
    include "header.php";

    include "Funcionario.class.php";

    $id=$_GET['cod_del']; 

    Funcionario::delete($id);  

    print('
        <p><a id="special" href="lista_funcionarios.php">Voltar</a>
    ');
include "footer.php";

?>
