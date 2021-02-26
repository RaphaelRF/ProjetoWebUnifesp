<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap5.css" type="text/css">
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
    <title> Login </title>
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

    <div class="divform" style="color: black" align="center">
        <form class="login_form" method="POST" action="login.php">
        <label><span style="color: white">Login:</span></label><input type="text" name="login" id="login"><br><br>
        <label> <span style="color: white">Senha:</span></label><input type="password" name="senha" id="senha"><br><br>
        <input class="botao" type="submit" value="entrar" id="entrar" name="entrar"><br><br>
        <a href="cadastro_form.php">Cadastre-se</a>
        </form>
    </div>
</body>
</html>