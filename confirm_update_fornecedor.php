<?php
    include "Fornecedor.class.php";

	$id=$_GET['cod_alter'];
	$nome_alter=$_GET['nome_alter'];
	$endereco_alter=$_GET['endereco_alter'];
	$cidade_alter=$_GET['cidade_alter'];
	$telefone_alter=$_GET['telefone_alter'];

	// TODO: falta verificar se campos estão preenchidos
    
    Fornecedor::update($id, $nome_alter, $endereco_alter, $cidade_alter, $telefone_alter);

	print("Alteração do fornecedor realizada:<p>
        $id <b>$nome_alter</b> $endereco_alter<b> $cidade_alter <b> $telefone_alter<b>
        Dados do fornecedor alterados com sucesso!"
    );
?>
<p><a href="index.php">Voltar</a>
