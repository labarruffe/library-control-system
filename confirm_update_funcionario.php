<?php
    include "Funcionario.class.php";

	$id=$_GET['cod_alter'];
	$nome_alter=$_GET['nome_alter'];
    $dt_contrat_alter=$_GET['dt_contrat_alter'];
    $dt_contrat_alter=date("Y-m-d", strtotime($dt_contrat_alter));

	// TODO: falta verificar se campos estão preenchidos
    
    Funcionario::update($id, $nome_alter, $dt_contrat_alter);

	$dt_contrat_alter=date("d-m-Y", strtotime($dt_contrat_alter));

	print("Alteração do funcionário realizada:<p>
        $id <b>$nome_alter</b> $dt_contrat_alter  <p>
        Dados do funcionário alterados com sucesso!"
    );
?>
<p><a href="index.php">Voltar</a>
