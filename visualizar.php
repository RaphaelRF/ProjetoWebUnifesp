<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap5.css" type="text/css">
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
    <title> Visualizar </title>
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
        
        <form class="ins_form_vis" action="visualizar_action.php" method="post">
            <br><br>
        <label class="insira" align="center"><span style="color:white">Como deseja ver o seu </span><span style="color:yellow">time?</span></label><br><br>
        <select id="escolha" name="escolha">
        <option value="selecionar">Selecionar</option>
        <option value="ordem">Ordem alfabética</option>
        <option value="posicao">Posição</option>
        <option value="idade">Idade</option>
  </select>
            <input class="botao" type="submit" value="Enviar"><br>
    </form>
    <br>

    

    </div>
</body>
</html>