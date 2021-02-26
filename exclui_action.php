<?php 


	require('conexao.php');

			$stmt = $conexao->prepare("DELETE FROM `jogador` WHERE `nome`= ? AND `iduser`= ?");
			$stmt->bind_param('ss',$_POST['nome'],$_COOKIE['login']);

			$stmt->execute();

			if($stmt)
				header("Location:excluir_sucesso.php");

?>