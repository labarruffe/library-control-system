<?php

    include "header.php";

    print('<div class="section no-pad-bot" id="index-banner">
        <div class="container">
        <br><br>
        <h1 class="header center orange-text">Biblioteca</h1>
        <div class="row center">
            <h5 class="header col s12 light">Sistema de Gerenciamento de Estoque</h5>
        </div>
        <div class="row center">
            <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light orange">Estoque</a>
        </div>
        <br><br>
        </div>
    </div>
    
    <div class="container">
        <div class="section">

        <!--   Icon Section   -->
        <div class="row">
            <div class="col s12 m4">
            <div class="icon-block">
                <h2 class="center light-blue-text"><i class="material-icons">extension</i></h2>
                <h5 class="center"><a href="lista_livros.php">Acervo</a></h5>

            </div>
            </div>

            <div class="col s12 m4">
            <div class="icon-block">
                <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
                <h5 class="center"><a href="lista_funcionarios.php">Lista de Funcionários</a></h5>
            </div>
            </div>

            <div class="col s12 m4">
            <div class="icon-block">
                <h2 class="center light-blue-text"><i class="material-icons">local_shipping</i></h2>
                <h5 class="center"><a href="lista_fornecedores.php".php">Fornecedores</a></h5>
            </div>
            </div>
        </div>

        </div>
        <br><br>
        </div>
    ');

    #print('<p><a href="lista_funcionarios.php">Lista de Funcionários</a>');

    if($_POST) {
        # include "Mysql.class.php";

        # $mysql = new Mysql();

        # $mysql->dbConnect();
    }

    include "footer.php";
?>