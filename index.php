<!DOCTYPE html>

<!--1-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
        <form action="control/UsuarioControle.php" method="get">
            <label>Login:</label>
            <input type="text" name="login"/>
            <label>Senha:</label>
            <input type="password" name="senha"/>
            <label>Tipo de Usuario:</label>
            <select name="tipo">
                <option value="Admin">Admin</option>
                <option value="Padrão">Padrão</option>
            </select>
            <input type="submit" value="Enviar"/>
        </form>
    </body>
</html>
