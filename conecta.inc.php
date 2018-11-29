<?php
   function conecta_bd()
   {
      $link=mysqli_connect("localhost","root","","loja");
      if ($link)
         return($link);
      return(FALSE);
   }
?>