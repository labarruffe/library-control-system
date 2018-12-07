<?php
	include "header.php";
	
	$id=$_GET['id'];
	$nome=$_GET['nome'];
	$endereco=$_GET['endereco'];
	$cidade=$_GET['cidade'];
	$telefone=$_GET['telefone'];
	print("<h3>Deletando o fornecedor:</h3><p>
		Código: $id<br>
	   	Nome: <b>$nome</b><br>
	   	Endereço: <b>$endereco</b><br>
	   	Cidade: <b>$cidade</b><br>
	   	Telefone: <b>$telefone</b><br>"
	);
print('
<form action="confirm_delete_fornecedor.php" method="get">
	<input type="hidden" name="cod_del" value="<?php print($id)?>">
	<br><input type="submit" value="Deletar">
</form>
<p><a id="special" href="lista_fornecedores.php">Voltar</a>
');
include "footer.php";

?>
