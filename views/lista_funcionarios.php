<?php
include "../models/Funcionario.class.php";

    $resultado = Funcionario::getAll();

    print("<center><h2>Mostrando os funcionários...</h2>
        <table border='1' bordercolor='red'>
            <tr><td><b>Código</td>
            <td><b>Nome</td>
            <td><b>Data Contratação</td>
            <td><b>Deletar</td>
            <td><b>Alterar</td></tr>"
    );
    
    while ($linha=mysqli_fetch_array($resultado)) {
        $Id=$linha["id"];
        $Nome=$linha["nome"];
        $Data_Contratacao=$linha["data_contratacao"];
        $Data_Contratacao=date("d-m-Y", strtotime($Data_Contratacao));
        print("<tr><td align='center'>$Id</td>
            <td>$Nome</td>
            <td>$Data_Contratacao</td>
            <td><a href='delete_funcionario.php?id=$Id&nome=$Nome&dt_contrat=$Data_Contratacao'>Deletar</a></td>
            <td><a href='update_funcionario.php?id=$Id'>Alterar</a></td></tr>"
        );
    }
        print("</table></center>");
?>