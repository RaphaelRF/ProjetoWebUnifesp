<?php 

	require('conexao.php');
	$x = $_POST['nome1'];
	$t = $_COOKIE['login'];

	echo $x;

	$stmt = $conexao->prepare("UPDATE `jogador` SET `nome` = ?, `idade` = ?, `posicao` = ?, `pais` = ?  WHERE `nome` = ? AND `iduser` = ?");
			$stmt->bind_param('sissss',$_POST['nome'],$_POST['idade'],$_POST['posicao'],$_POST['pais'],$_POST['nome1'],$t);

			$stmt->execute();

			header("Location:alterar_sucesso.php");
			

	$conexao->close();

?>