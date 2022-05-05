<?php
session_start();
include 'master.php';
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica Vet</title>
    <!--Css-->
    <link rel="stylesheet" href="Css/style-login.css">
</head>

<body>
    <div class="w3-container w3-hide-medium w3-hide-small w3-hide-large">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />

            <p id="profile-name" class="profile-name-card">
                <b>Clínica Vet</b>
            </p>
            <form method="POST" action="login.php" class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" name="email" value="<?php if (isset($_COOKIE["lembrar_login"])) {
                                                            echo $_COOKIE["lembrar_login"];
                                                        } ?>" class="form-control" placeholder="E-mail" required autofocus>

                <div class="row">
                    <div class="col-10 sm-12 mb-3">
                        <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>
                    </div>
                    <div class="col-2 sm-12 mb-3">
                        <img id="olho" class="olho" src="Resources/Ico/olho.png" />
                    </div>
                </div>


                <div id="login-erro">
                    <?php
                    if (isset($_SESSION['nao_autenticado'])) :
                    ?>
                        <div class="notification is-danger">
                            <p>ERRO: Usuário ou senha inválidos.</p>
                        </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                </div>
                <div id="remember" class="field-group checkbox">
                    <input type="checkbox" name="remember" id="remember" value="remember-me" <?php if (isset($_COOKIE["lembrar_login"])) { ?> checked <?php } ?> />
                    <label for="remember-me">Lembre-se de mim</label>
                </div>

                <button type="submit" id="btnLogin" name="btnLogin" class="btn btn-lg btn-primary btn-block btn-signin">Entrar</button>

            </form><!-- /form -->
            <!-- <a href="#" class="forgot-password">
                Esqueceu a senha?
            </a> -->
        </div><!-- /card-container -->
    </div><!-- /container -->
    <script>
        var senha = $('#senha');
        var olho = $("#olho");

        olho.mousedown(function() {
            senha.attr("type", "text");
        });

        olho.mouseup(function() {
            senha.attr("type", "password");
        });
        $("#olho").mouseout(function() {
            $("#senha").attr("type", "password");
        });
    </script>
</body>

</html>