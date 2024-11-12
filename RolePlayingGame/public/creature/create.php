<?php
require_once __DIR__ . '/../../src/controllers/CreatureController.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crear Criatura</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <?php include __DIR__ . '/../../src/views/header.php'; ?>
    <div class="container">
        <h1>Crear Criatura</h1>
        <form action="../../src/controllers/CreatureController.php?action=create" method="POST">
            <label>Nombre: <input type="text" name="name" required></label><br>
            <label>Descripción: <input type="text" name="description"></label><br>
            <label>Nivel de Vida: <input type="number" name="life_level" required></label><br>
            <label>Arma: <input type="text" name="weapon"></label><br>
            <button type="submit">Crear</button>
        </form>
    </div>
    <?php include __DIR__ . '/../../src/views/footer.php'; ?>
</body>
</html>
