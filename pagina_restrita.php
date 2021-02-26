<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap5.css" type="text/css">
    <link rel="stylesheet" href="css/estilo.css" type="text/css">

    <title>Página do usuário</title>
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
            <h1 class="bemvindo">
                <?php
                $login_cookie = $_COOKIE['login'];
                echo '<span style="color: white"> Bem-Vindo, '. '<span style="color: yellow">'.$login_cookie. '</span>'.'</span>';
                ?>
            </h1>
    </div>
    <div>
        <table border="1" align="center" width="100%">
        <tbody>
            <td class="desejo">
            <h1 align="center"><span style="color:white">O que deseja fazer com o seu </span><span style="color:yellow">time?</span></h1><br>
            </td>
        
        <td align="center">
            <form class="acoes" method="GET" action="tratamento.php">
            <input class="botao1" type="submit" value="inserir" id="inserir" name="inserir"><br><br>
            <input class="botao1" type="submit" value="excluir" id="excluir" name="excluir"><br><br>
            <input class="botao1" type="submit" value="alterar" id="alterar" name="alterar"><br><br>
            <input class="botao1" type="submit" value="visualizar" id="visualizar" name="visualizar"><br><br>
            </form>
        </td>
        </tr>
        </tbody>
        </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="js/bootstrap5.js" type="text/javascript"></script>

  </body>
</html>