<?php
session_start();
require('app/app.php');
verif_is_auth();

$view_bag['error'] = '';

if(!isset($_SESSION['id'])){

    if(isset($_POST['confirmar'])){
        $mysql = new userdata();
        $result = $mysql->verif_username($_POST['login'], $_POST['password']);
        if($result->rowCount() > 0){
            $user = $result->fetch();
            $_SESSION['id'] = $user["id"];
            redirect('index.php');
        }
        else
            $view_bag['error'] = "Username e/ou Password incorretos.";
    }
}
else{
    view('index');
}

view('login');
?>