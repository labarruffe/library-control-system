<?php
    include "header.php";

    include "Funcionario.class.php";

    $resultado = Funcionario::getAll();

    print('<div class="container">
        <div class="col s12 m8 offset-m1 xl7 offset-xl1">
        <div id="highlight" class="section scrollspy">
        <h3 class="header">Mostrando os funcionários</h3>
        <div class="row">
        <div class="col s12"> 
            <table class="highlight">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Data Contratação</th>
                    <th>Deletar</th>
                    <th>Alterar</th>
                </tr>
            </thead>
            <tbody>
            ');    
    
    while ($linha=mysqli_fetch_array($resultado)) {
        $Id=$linha["id"];
        $Nome=$linha["nome"];
        $Data_Contratacao=$linha["data_contratacao"];
        $Data_Contratacao=date("d-m-Y", strtotime($Data_Contratacao));
        print("
            <tr>
                <td>$Id</td>
                <td>$Nome</td>
                <td>$Data_Contratacao</td>
                <td><a href='delete_funcionario.php?id=$Id&nome=$Nome&dt_contrat=$Data_Contratacao'>Deletar</a></td>
                <td><a href='update_funcionario.php?id=$Id'>Alterar</a></td>
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