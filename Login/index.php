
<?php
ini_set('default_charset', 'utf-8');


if(isset($_POST['submit'])){
$senha = (string)$_POST['password'];
$email = (string)$_POST['username'];

}
?>


<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuffEats | Login</title>
    <link rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="login.css">
</head>
<body>


    <main>
        <div id="div_form_login">
                <form method="post" id="formulario">
                    <h1 class="login_title">Login</h1>
                    <label class="login_subtitle">Usuário:</label>
                    <input type="text" name="username" id="username" class="input_box">
                    <label class="login_subtitle">Senha:</label>
                    <input type="password" name="password" id="password" class="input_box">
                    <div id="container_login">
                        <label class="container_conectado">Mantenha-me conectado
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="login_senha"><a href="#" class="none_senha"><B>Esqueceu a senha?</B></a></label>
                    </div>
                    <button type="submit" name="submit" class="button_submit">ENTRAR</button>
                    <label class="login_inscrever"><a href="#" class="none_inscrever" >Não tem uma conta? <B>Inscreva-se!</B></a></label>
                    <div id="container_gmail">
                        <img src="img/Icon_Google.svg" width="25px">
                        <label class="login_gmail">LOGAR COM O GMAIL</label>
                    </div>
                    <div id="container_termos">
                        <label class="login_termos"><a href="#" class="none_termos">Termos de privacidade</a></label>
                    </div>
                </form>
        </div>
    </main>
   
    

    
</body>
</html>