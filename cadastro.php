<?php

$login = $_POST['login'];
$senha = MD5($_POST['senha']);

require('conexao.php');

      $query_select = "SELECT login FROM usuarios WHERE login = '$login'";

      $select = mysqli_query($conexao,$query_select);
      $array = mysqli_fetch_array($select);
      $logarray = $array['login'];

      if($logarray == $login){

        header("Location:erro_cadastro.php");
        die();

      }

      else{
        $stmt = $conexao->prepare("INSERT INTO usuarios(login, senha) VALUES (?,?)");
      $stmt->bind_param('ss',$login,$senha);

      $stmt->execute();

      header("Location:recem_cadastro.php");

      }

    


?>