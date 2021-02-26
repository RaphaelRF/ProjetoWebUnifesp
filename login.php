<?php
$login = $_POST['login'];
$entrar = $_POST['entrar'];
$senha = md5($_POST['senha']);

require('conexao.php');
  if (isset($entrar)) {

    $verifica = mysqli_query($conexao, "SELECT * FROM usuarios WHERE login =
    '$login' AND senha = '$senha'") or die("erro ao selecionar");
      if (mysqli_num_rows($verifica)<=0){
        header("Location:erro.php");
        die();
      }else{
        setcookie("login",$login);
        header("Location:pagina_restrita.php");
      }
  }
?>