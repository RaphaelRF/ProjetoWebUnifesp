<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap5.css" type="text/css">
    <link rel="stylesheet" href="css/estilo.css" type="text/css">

    <title>Cadastro</title>
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
                            include "menu.php";
                        ?>
                    </div>
                    
                </div>
                
            </div> 
        </div>
    </div>

    <div class="cadastro1">

        <table width="100%">
           <tr>
            <td class="linha_cadastro" align="center">
                <h1 align="center"><span style="color:yellow">Cadastre-se</span><span style="color:white"> agora mesmo!</span></h1><br>
                <form method="POST" action="cadastro.php">
                <label><span style="color: white">Login:</span></label><input type="text" name="login" id="login"><br><br>
                <label> <span style="color: white">Senha:</span></label><input type="password" name="senha" id="senha"><br><br>
                <input class="botao" type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
            </td>
            <td class="cris" align="right">
                <img src="img/cris.jpg" width="101%">
            </td>
               
           </tr>

       </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/bootstrap.bundle.js" type="text/javascript"></script>

  </body>
</html>