<?php
    include "header.php";

    include "Fornecedor.class.php";

	$id=$_GET['id'];

    $resultado1 = Fornecedor::getById($id);
    $linha=mysqli_fetch_array($resultado1);
    
	$Id=$linha["id"];
	$Nome=$linha["nome"];
	$Endereco=$linha["endereco"];
	$Cidade=$linha["cidade"];
	$Telefone=$linha["telefone"];
	
	print("<h3>Alterando os dados do fornecedor:</h3><p>");
?>

<form action="confirm_update_fornecedor.php" method="get">
    Código: <?php print($Id)?>
    <input type="hidden" name="cod_alter" value="<?php print($Id)?>">
    <br>Nome: <input type="text" name="nome_alter" value="<?php print($Nome)?>">
    <br>Endereço: <input type="text" name="endereco_alter" value="<?php print($Endereco)?>">
    <br>Cidade: <input type="text" name="cidade_alter" value="<?php print($Cidade)?>">
    <br>Telefone: <input type="text" name="telefone_alter" value="<?php print($Telefone)?>">

    <p><input type="submit" value="Alterar Dados">
</form>
<p><a href="lista_fornecedores.php">Voltar</a>
