<?php
    session_start();
    unset($_SESSION['user']);
    unset($_SESSION['clave']);
    session_destroy();
    header("Location: prueba_sesion1.php");
    exit;
?>