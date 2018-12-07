<?php
    include "header.php";

    include "Livro.class.php";

    $resultado = Livro::getAll();
print('<div class="container">
        <h3 class="header">Acervo</h3>
        </div>
        ');
while ($linha=mysqli_fetch_array($resultado))  {
   $Id=$linha["id"];
   $Titulo=$linha["titulo"];
   $Ano_publicacao=$linha["ano_publicacao"];
   $Edicao=$linha["edicao"];
   $Editora=$linha["editora"];
   $Id_fornecedor=$linha["nome"];
    print('<div id="profile-card" class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="images/user-bg.jpg" alt="user bg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">
      <h6>'.$Titulo.'</h6>
       </span>
      <p><i class="mdi-action-perm-identity"></i> '.$Editora.'</p>
      <p><i class="mdi-action-perm-phone-msg"></i> '.$Ano_publicacao.' - '.$Edicao.'º Ed</p>
    </div>
  </div>');
}
    
include "footer.php";
?>