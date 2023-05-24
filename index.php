<?php
session_start();
require 'db.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Início</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>

    <div class="container_total">
        <div class="cont_esq">
            <div class="form">
                <form action="code.php" method="post">

                    <ul>
                        <li id="btnLogin" onclick="mudarCor('btnLogin')">Entrar</li>
                        <li id="btnCadastro" onclick="mudarCor('btnCadastro')">Cadastrar</li>
                    </ul>

                    <div class="email-container">
                        <input type="email" name="email" id="">
                        <img class="img-input" src="https://www.svgrepo.com/show/502648/email.svg" width="30" alt="">
                    </div>

                    <div class="email-container">
                        <input type="password" name="senha" id="">
                        <img class="img-input" src="https://www.svgrepo.com/show/510035/key.svg" width="30" alt="">
                    </div>

                    <input class="button" name="cadastrar" type="submit" value="Enviar">
                </form>
                <br>
                <div id="linha"></div>
                <a href="">
                    <p id="eSenha">Esqueci a senha</p>
                </a>
                <br><br>

                <div class="icons">

                    <a href="">
                        <div class="logos"><img src="https://logopng.com.br/logos/google-37.png" width="30px" height="30px" alt="" id="google"></div>
                    </a>
                    <a href="">
                        <div class="logos"><img src="https://logospng.org/download/apple/logo-apple-4096.png" width="30px" height="30px" alt="" id="apple"></div>
                    </a>
                    <a href="">
                        <div class="logos"><img src="https://logodownload.org/wp-content/uploads/2014/09/facebook-logo-0.png" width="30px" height="30px" alt="" id="facebook"></div>
                    </a>

                </div>

            </div>
        </div>
        <div class="cont_dir"> <img src="" alt=""></div>
    </div>

    <script src="index.js"></script>
</body>

</html>