<?php
require('app/app.php');

if(isset($_POST['confirmar'])){
    $mysql = new userdata();
    $result = $mysql->verif_username($_POST['login'], $_POST['password']);
    if($result->rowCount() == 0){
        $mysql->add_username($_POST['login'], $_POST['password']);
        redirect('login.php');
    }
    else
        $error = "Username existente.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <link rel="stylesheet" href="css/main.css?2" type="text/css">
    <title>Registro</title>
</head>
<body>
    <ul class="squares">
    </ul>
    <div class="login-form">
        <h2>Treino Projeto</h2>
        <p>Olá Seja Bem-vindo ao Registro</p>
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
            <div class="single-i">
                <i class="icon fas fa-at"></i>
                <input class="inp" type="text" name="email" id="email" placeholder="E-mail">
            </div>
            <div class="single-i">
                <i class="icon fas fa-address-card"></i>
                <input class="inp" type="text" name="name" id="name" placeholder="Nome">
            </div>
            <div class="single-i">
                <i class="icon fas fa-address-card"></i>
                <input class="inp" type="text" name="lname" id="lname" placeholder="Sobrenome">
            </div>
            <div class="single-i confirm-reg">
                <input class="btn" type="submit" name="confirmar" value="Confirmar">
                <a class="btn" href="login.php">Voltar</a>
            </div>
        </form>
    </div>
    <script src="js/index.js"></script>
</body>
</html>