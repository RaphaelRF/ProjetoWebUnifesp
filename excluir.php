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

    <div class="divform" style="color: black" align="center">
        
        <form class="ins_form_exc" action="exclui_action.php" method="post">
            <br><br>
        <label class="insira" align="center"><span style="color:yellow">Exclua</span><span style="color:white"> o seu jogador</span></label><br><br>
        <label for="nome"><span style="color: white">Nome:</span></label><br>
          <input type="text" id="nome" name="nome"><br><br>

            <input class="botao" type="submit" value="Enviar">
    </form>

    </div>
</body>
</html>