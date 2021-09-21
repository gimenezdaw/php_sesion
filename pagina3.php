<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Las variables de sesion son
    USER = <?php echo $_SESSION['user'];?>
    PASSWORD =     <?php echo $_SESSION['pass'];?>

    <a href="cerrar_sesion.php">Cerrar sesion</a>
    
</body>
</html>