<?php
session_start();
require('app/app.php');
ensure_auth();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css?1" type="text/css">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul class="flex">
            <li><?php echo $_SESSION['id'].' Teste';?></li>
            <li>
                <a href="A">TesteA</a> 
                <a href="B">TesteB</a> 
                <a href="C">TesteC</a>
            </li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
</body>
</html>