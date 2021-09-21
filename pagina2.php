<?php
    session_start();
    $usuario = $_POST['campousuario'];
    $pass = $_POST['campoclave'];

    $_SESSION['user']= $usuario;
    $_SESSION['clave']=$pass;
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pagina 2</title>
    </head>
    <body>
        Pasar a pagina 3
        <a href='pagina3.php'> Ir a la pagina 3</a>

    </body>
    </html>