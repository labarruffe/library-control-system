<?php
include "Mysql.class.php";

$mysql = new Mysql();

$ok = $mysql->dbConnect() or die ("Não é possível conectar-se ao servidor.");
$resultado=mysqli_query($ok, "Select * from funcionarios order by nome") or die ("Não é possível consultar departamentos.");
print("<center><h2>Mostrando os funcionários...</h2>");
print("<table border='1' bordercolor='red'>");
print("<tr><td><b>Código</td>");
print("<td><b>Nome</td>");
print("<td><b>Deletar</td><td><b>Alterar - precisa implementar!</td></tr>");
while ($linha=mysqli_fetch_array($resultado))  
{
   $CodigoD=$linha["id"];
   $NomeD=$linha["nome"];
   print("<tr><td align='center'>$CodigoD</td>");
   print("<td>$NomeD</td>");
   print("<td><a href='deletard.php?cod=$CodigoD&nom=$NomeD'>Deletar</a></td>");
   print("<td><a href='alterard.php?cod=$CodigoD&nom=$NomeD'>Alterar</a></td></tr>"); 
 }
   print("</table></center>");
?>
<hr>
<a href="inserird.php">Inserir Departamento - precisa implementar!</a>
<p><a href="mostraf.php">Mostrar Funcionários</a>