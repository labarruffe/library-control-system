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
                <h5 class="center">Acervo</h5>

                <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
            </div>
            </div>

            <div class="col s12 m4">
            <div class="icon-block">
                <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
                <h5 class="center"><a href="lista_funcionarios.php">Lista de Funcionários</a></h5>
                
                <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
            </div>
            </div>

            <div class="col s12 m4">
            <div class="icon-block">
                <h2 class="center light-blue-text"><i class="material-icons">local_shipping</i></h2>
                <h5 class="center">Fornecedores</h5>

                <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
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