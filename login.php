<?php
session_start();
require('app/app.php');
verif_is_auth();

$error = '';

if(!isset($_SESSION['id'])){

    if(isset($_POST['confirmar'])){
        $mysql = new userdata();
        $result = $mysql->verif_username($_POST['login'], $_POST['password']);
        if($result->rowCount() > 0){
            $user = $result->fetch();
            $_SESSION['id'] = $user["id"];
            redirect('index.php');
        }
        else{
            $error = "Username e/ou Password incorretos.";
        }

    }
}
else{
    require("index.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <link rel="stylesheet" href="css/main.css?1" type="text/css">
</head>
<body>
    <ul class="squares">
    </ul>
    <div class="login-form">
        <h2>Treino Projeto</h2>
        <p>Olá Seja Bem-vindo ao Login</p>
        <form class="form-flex" method="POST">
            <div class="single-i">
                <i class="icon fas fa-user"></i>
                <input class="inp" type="text" name="login" id="login" placeholder="Usuário">
            </div>
            <div class="single-i">
                <i class="icon fas fa-unlock"></i> 
                <input class="inp-2" type="password" name="password" id="password" placeholder="Senha">
                <i class="icon-2 fas fa-eye"></i>
            </div>
            <div>
                <p><?= $error ?></p>
            </div>
            <div class="single-i">
                <input class="btn" type="submit" name="confirmar" value="Confirmar">
            </div>
            <div class="single-i">
                <a class="btn" href="register.php">Registrar</a>
            </div>
        </form>
    </div>
    <script src="js/index.js"></script>
</body>
</html>