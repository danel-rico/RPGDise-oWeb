<?php
require_once __DIR__ . '/../../src/controllers/AuthController.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <form action="../../src/controllers/AuthController.php?action=login" method="POST">
        <label>Usuario: <input type="text" name="username" required></label><br>
        <label>Contraseña: <input type="password" name="password" required></label><br>
        <button type="submit">Iniciar Sesión</button>
    </form>
</body>
</html>

