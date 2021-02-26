<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap5.css" type="text/css">
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
    <title> Excluir </title>
</head>
<body class="corpo">

	 <div class="container-fluid">
        <div class="row linhaUmIndex">
            <div class="container">
                <div class="row">
                    <div class="col-3 pb-0 pt-0">
                        <img src="img/logo1.png" alt="Camisa 10" title="Camisa 10" width="50%">
                    
                    </div>
                    <div class="col-9 pt-3" align="right">

                        <?php
                            include "menu_r.php";
                        ?>
                    </div>
                    
                </div>
                
            </div> 
        </div>
    </div>

    <?php 


	require('conexao.php');

		if ($_POST['escolha'] == "ordem"){
			$t = $_COOKIE['login'];
			$results = $conexao->query("SELECT idjogador,nome,idade,posicao,pais,iduser FROM jogador WHERE iduser = '$t' ORDER BY nome ASC");

			echo "<table class='tabela' border=3 align='center'>";

			echo '<tr>';
			echo ' <td><b>IdJogador </b></td>';
			echo ' <td><b>Nome</b></td>';
			echo ' <td><b>Idade </b></td>';
			echo ' <td><b>Posicao </b></td>';
			echo ' <td><b>Pais </b></td>';
			echo ' <td><b>IdUser </b></td>';
		

			while($row = $results->fetch_assoc()){
			echo '<tr>';
			echo ' <td>'.$row["idjogador"].'</td>';
			echo ' <td>'.$row["nome"].'</td>';
			echo ' <td>'.$row["idade"].'</td>';
			echo ' <td>'.$row["posicao"].'</td>';
			echo ' <td>'.$row["pais"].'</td>';
			echo ' <td>'.$row["iduser"].'</td>';
			echo '</tr>';
			}

			echo "</table>";

			$results->free();

			$conexao->close();
		}

		if ($_POST['escolha'] == "posicao"){

			$t = $_COOKIE['login'];
			$results = $conexao->query("SELECT idjogador,nome,idade,posicao,pais,iduser FROM jogador WHERE iduser = '$t' ORDER BY posicao ASC");

			echo "<table class='tabela' border=3 align='center'>";

			echo '<tr>';
			echo ' <td><b>IdJogador </b></td>';
			echo ' <td><b>Nome</b></td>';
			echo ' <td><b>Idade </b></td>';
			echo ' <td><b>Posicao </b></td>';
			echo ' <td><b>Pais </b></td>';
			echo ' <td><b>IdUser </b></td>';
			
			echo '</tr>';
		

			while($row = $results->fetch_assoc()){
			echo '<tr>';
			echo ' <td>'.$row["idjogador"].'</td>';
			echo ' <td>'.$row["nome"].'</td>';
			echo ' <td>'.$row["idade"].'</td>';
			echo ' <td>'.$row["posicao"].'</td>';
			echo ' <td>'.$row["pais"].'</td>';
			echo ' <td>'.$row["iduser"].'</td>';
			echo '</tr>';
			}

			echo "</table>";

			$results->free();

			$conexao->close();
		}

		if ($_POST['escolha'] == "idade"){

			$t = $_COOKIE['login'];
			$results = $conexao->query("SELECT idjogador,nome,idade,posicao,pais,iduser FROM jogador WHERE iduser = '$t' ORDER BY idade ASC");

			echo "<table class='tabela' border=3 align='center'>";

			echo '<tr>';
			echo ' <td><b>IdJogador </b></td>';
			echo ' <td><b>Nome</b></td>';
			echo ' <td><b>Idade </b></td>';
			echo ' <td><b>Posicao </b></td>';
			echo ' <td><b>Pais </b></td>';
			echo ' <td><b>IdUser </b></td>';
			
			echo '</tr>';
		

			while($row = $results->fetch_assoc()){
			echo '<tr>';
			echo ' <td>'.$row["idjogador"].'</td>';
			echo ' <td>'.$row["nome"].'</td>';
			echo ' <td>'.$row["idade"].'</td>';
			echo ' <td>'.$row["posicao"].'</td>';
			echo ' <td>'.$row["pais"].'</td>';
			echo ' <td>'.$row["iduser"].'</td>';
			echo '</tr>';
			}

			echo "</table>";

			$results->free();

			$conexao->close();
		}

		if ($_POST['escolha'] == "selecionar"){
			header("Location:visualizar.php");
		}

?>
<br>
<a href="visualizar.php"><button class="botao">Voltar</button></a>;
</body>
</html>
