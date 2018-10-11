<!--6-->
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once '../model/Usuario.php';
            session_start();
            $u = new Usuario();
            $u = unserialize($_SESSION['usuario']);
            echo $u;
        ?>
    </body>
</html>
