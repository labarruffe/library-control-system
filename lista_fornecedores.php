<?php
    include "header.php";

    include "Fornecedor.class.php";

    $resultado = Fornecedor::getAll();

    print('<div class="container">
        <div class="col s12 m8 offset-m1 xl7 offset-xl1">
        <div id="highlight" class="section scrollspy">
        <h3 class="header">Fornecedores</h3>
        <div class="row">
        <div class="col s12"> 
            <table class="highlight">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Cidade</th>
                    <th>Telefone</th>
                    <th>Deletar</th>
                    <th>Alterar</th>
                </tr>
            </thead>
            <tbody>
            ');    
    
    while ($linha=mysqli_fetch_array($resultado)) {
        $Id=$linha["id"];
        $Nome=$linha["nome"];
        $Endereco=$linha["endereco"];
        $Cidade=$linha["cidade"];
        $Telefone=$linha["telefone"];
        print("
            <tr>
                <td>$Id</td>
                <td>$Nome</td>
                <td>$Endereco</td>
                <td>$Cidade</td>
                <td>$Telefone</td>
                <td><a href='delete_fornecedor.php?id=$Id&nome=$Nome&endereco=$Endereco&cidade=$Endereco&cidade=$Cidade&telefone=$Telefone'>Deletar</a></td>
                <td><a href='update_fornecedor.php?id=$Id'>Alterar</a></td>
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