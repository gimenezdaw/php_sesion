<?php
    session_start();
    $usuario = $_POST['campousuario'];
    $pass = $_POST['campoclave'];

    $_SESSION['user']= $usuario;
    $_SESSION['clave']=$pass;