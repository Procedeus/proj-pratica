<?php
require('app/app.php');

$view_bag['error'] = '';
$view_bag['errore'] = '';

if(isset($_POST['confirmar'])){

    $mysql = new userdata();
    $result = $mysql->verif_username($_POST['login'], $_POST['password']);

    if($result->rowCount() == 0){
        $mysql->add_username($_POST['login'], $_POST['password'], $_POST['email'], $_POST['name'], $_POST['lname']);
        redirect('login.php');
    }
    else
        $view_bag['error'] = "Username existente.";

    $filtro_email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    if (filter_var($filtro_email, FILTER_VALIDATE_EMAIL)) {
        $resulte = $mysql->verif_email($_POST['email']);
        if($resulte->rowCount() > 0)
        $view_bag['errore'] = "Email Existente.";
    } else {
        $view_bag['errore'] = "Email Invalido.";;
    }
}

view('register');
?>