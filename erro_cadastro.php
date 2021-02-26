<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap5.css" type="text/css">
    <link rel="stylesheet" href="css/estilo.css" type="text/css">

    <title>Erro de cadastro</title>
  </head>
  <body>
    
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

    <div class="top">
        <table width="100%">
           <tr>
            <td class="erro" align="left">
            <h1><span style="color:white">Esse login já </span><span style="color:yellow">existe.</span></h1> <br>
            <a href="cadastro_form.php"><button class="botao">Voltar</button></a>
            </td>
            <td align="right">
                <img src="img/ca.jpg" width="110%">
            </td>
               
           </tr>

       </table>
    </div>

        

    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="js/bootstrap5.js" type="text/javascript"></script>
    

  </body>
</html>