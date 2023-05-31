<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/70a75f288d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/colors.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login-container.css">
    <link rel="stylesheet" href="css/form-container.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/form-input-container.css">
    <link rel="stylesheet" href="css/form-link.css">
    <link rel="stylesheet" href="css/form-button.css">
    <link rel="stylesheet" href="css/form-title.css">
    <link rel="stylesheet" href="css/form-social.css">
    <link rel="stylesheet" href="css/social-icon.css">
    <link rel="stylesheet" href="css/form-input.css">
    <link rel="stylesheet" href="css/overlay-container.css">
    <link rel="stylesheet" href="css/overlay.css">
    <link rel="stylesheet" href="css/mobile-text.css">
    <link rel="stylesheet" href="form-input-container-r.css">
    <script src="./script.js" defer></script>
</head>
<body>
    
    <main>
        <div class="background">

            <div class="login-container" id="login-container">

                <div class="form-container">
                    <form class="form form-login">
                        <h2 class="form-title">Entrar com</h2>
                        <div class="form-social">
                            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i>&nbsp Facebook</a>
                            <a href="#" class="social-icon"><i class="fab fa-google"></i>&nbsp Google</a>
                        </div>
                        <p class="form-text"><strong>ou utilize a conta</strong></p>
                        <div class="form-input-container"> 
                            <input type="email" class="form-input" placeholder="Email">
                            <input type="password" class="form-input" placeholder="Senha">
                        </div>
                        <a href="#" class="form-link"><strong>esqueceu a senha?</strong> </a>
                        <button type="button" class="form-button">ENTRAR</button>
                        <p class="mobile-text"><strong>Não tem conta? <a href="#" id="open-register-mobile">Registre-se</a></strong></p>
                    </form>
                    <form class="form form-register" action = "php/salvar.php" method="post">
                        <h2 class="form-title">Criar conta</h2>
                        <div class="form-social">
                            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i>&nbsp Facebook</a>
                            <a href="#" class="social-icon"><i class="fab fa-google"></i>&nbsp Google</a>
                        </div>
                        <p class="form-text"><strong>ou cadastrar email</strong></p>
                        <div class="form-input-container"> 
                            <input type = "hidden" name = "acao" value = "cadastrar">
                            <input type="text" class="form-input" placeholder="Nome completo" name="nome">
                            <input type="text" class="form-input" placeholder="Número de telefone" name="numero">
                            <input type="email" class="form-input" placeholder="Email" name="email">
                            <input type="password" class="form-input" placeholder="Senha" name="senha">
                            Papel 
                            <label> Cliente <input type = "checkbox" name = "papel[]" value = "1"> </label>
                            <label> Administrador <input type = "checkbox" name = "papel[]" value = "2"> </label>
                        </div>
                        <button type="submit" class="form-button">CADASTRAR</button>
                        <p class="mobile-text"><strong>Já tem conta? <a href="#" id="open-login-mobile">Entrar</a></strong></p>
                </form>
                </div>

                <div class="overlay-container">
                    <div class="overlay">
                        <h2 class="form-title form-title-light">Já tem conta?</h2>
                        <p class="form-text">Para entar na nossa plataforma, faça login com suas informações</p>
                        <button class="form-button form-button-light" id="open-login">ENTRAR</button>
                    </div>
                    <div class="overlay">
                        <h2 class="form-title form-title-light">Não tem conta?</h2>
                        <p class="form-text">Cadastre-se e faça o seu pedido na Sidelicie</p>
                        <button class="form-button form-button-light" id="open-register">CADASTRAR</button>
                    </div>
                </div>

            </div>

        </div>
    </main>
    
</body>
</html>

<?php
include ("php/config.php");
?>
