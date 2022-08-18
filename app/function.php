<?php

function redirect($url){
    header("Location: $url");
    die();
}

function is_auth(){
    return isset($_SESSION['id']);
}

function ensure_auth(){
    if(!is_auth()){
        redirect('login.php');
    }
}

function verif_is_auth(){
    if(is_auth()){
        redirect('index.php');
    }
}
?>