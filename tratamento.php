<?php

  if (isset($_GET['inserir'])) {
  	

            header("Location:inserir.php");       
  }

  else if (isset($_GET['excluir'])) {
  	
           
            header("Location:excluir.php");        
  }

  else if (isset($_GET['visualizar'])) {
  	
        
            header("Location:visualizar.php");       
  }

  else if (isset($_GET['alterar'])) {
    
        
            header("Location:alterar.php");       
  }
 ?>