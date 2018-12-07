<?php
    include "header.php";

    include "Estoque.class.php";

    $resultado = Estoque::getAll();

    print('<div class="container">
        <div class="col s12 m8 offset-m1 xl7 offset-xl1">
        <div id="highlight" class="section scrollspy">
        <h3 class="header">Estoque</h3>
        <div class="row">
        <div class="col s12"> 
            <table class="highlight">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Livro</th>
                    <th>Funcionário</th>
                    <th>Fornecedor</th>
                    <th>Qtd Total</th>
                    <th>Qtd Recebida</th>
                    <th>Data Atualização</th>
                    <th>Deletar</th>
                    <th>Alterar</th>
                </tr>
            </thead>
            <tbody>
            ');    
    
    while ($linha=mysqli_fetch_array($resultado)) {
        $Id=$linha["id"];
        $Livro=$linha["titulo"];
        $Funcionario=$linha["nome"];
        $Qtd_total=$linha["quant_total"];
        $Qtd_recebida=$linha["quant_recebida"];
        $Dt_atualizacao=$linha["data_atualizacao"];
        $Forn=$linha["cidade"];
        print("
            <tr>
                <td>$Id</td>
                <td>$Livro</td>
                <td>$Funcionario</td>
                <td>$Forn</td>
                <td>$Qtd_total</td>
                <td>$Qtd_recebida</td>
                <td>$Dt_atualizacao</td>
            </tr>
        ");  
    }
    print('</tbody>
            </table>
            </div>
            </div>
            </div>
            </div>
            </div>
        ');
        
    include "footer.php";

?>