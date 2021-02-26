<?php 

	require('conexao.php');

	$stmt = $conexao->prepare("INSERT INTO jogador(nome, idade, posicao, pais, iduser) VALUES (?,?,?,?,?)");
			$stmt->bind_param('sisss',$_POST['nome'],$_POST['idade'],$_POST['posicao'],$_POST['pais'],$_COOKIE['login']);

			$stmt->execute();

			header("Location:inserir_sucesso.php");
			

	$conexao->close();

?>