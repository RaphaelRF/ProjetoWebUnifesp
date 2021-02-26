<?php
require('conexao.php');

      if($_POST['menu'] == "home"){

        header("Location:pagina_restrita.php");
        die();

      }

      else if($_POST['menu'] == "quem"){

        header("Location:quem_restrito.php");
        die();

      }

      else if($_POST['menu'] == "contato"){

        header("Location:contato_r.php");
        die();

      }

      else if($_POST['menu'] == "sair"){

        header("Location:login_form.php");
        die();

      }

      else{
        header("Location:pagina_restrita.php");
      }

?>