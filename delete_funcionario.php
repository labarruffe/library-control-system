<?php
	$id=$_GET['id'];
	$nome=$_GET['nome'];
	$dt_contrat=$_GET['dt_contrat'];
	print("<h3>Deletando o funcionário:</h3><p>
		Código: $id<br>
	   	Nome: <b>$nome</b><br>
	   	Data Contratação: <b>$dt_contrat</b><br>"
	);
?>
<form action="confirm_delete_funcionario.php" method="get">
	<input type="hidden" name="cod_del" value="<?php print($id)?>">
	<br><input type="submit" value="Deletar">
</form>
<p><a href="lista_funcionarios.php">Voltar</a>