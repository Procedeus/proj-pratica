<?php
session_start();
require('app/app.php');
ensure_auth();

view('index');
?>