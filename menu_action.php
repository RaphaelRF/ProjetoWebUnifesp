<?php
require('conexao.php');

      if($_POST['menu'] == "home"){

        header("Location:index.php");
        die();

      }

      else if($_POST['menu'] == "quem"){

        header("Location:quem.php");
        die();

      }

      else if($_POST['menu'] == "contato"){

        header("Location:contato.php");
        die();

      }

      else if($_POST['menu'] == "login"){

        header("Location:login_form.php");
        die();

      }

      else{
        header("Location:index.php");
      }

?>