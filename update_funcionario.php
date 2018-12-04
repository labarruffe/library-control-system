<?php
    include "Funcionario.class.php";

	$id=$_GET['id'];

    $resultado1 = Funcionario::getById($id);
    $linha=mysqli_fetch_array($resultado1);
    
	$Id=$linha["id"];
	$Nome=$linha["nome"];
    $Data_Contratacao=$linha["data_contratacao"];
    $Data_Contratacao=date("d-m-Y", strtotime($Data_Contratacao));
	
	print("<h3>Alterando os dados do funcionário:</h3><p>");
?>

<form action="confirm_update_funcionario.php" method="get">
    Código: <?php print($Id)?>
    <input type="hidden" name="cod_alter" value="<?php print($Id)?>">
    <br>Nome: <input type="text" name="nome_alter" value="<?php print($Nome)?>">
    <br>Data Contratação: <input type="text" name="dt_contrat_alter" value="<?php print($Data_Contratacao)?>">

    <p><input type="submit" value="Alterar Dados">
</form>
<p><a href="index.php">Voltar</a>
