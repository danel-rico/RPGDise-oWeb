<?php
require_once __DIR__ . '/../../src/controllers/CreatureController.php';
$id = $_GET['id'];
$creature = getCreatureById($id); // Llama a la función para obtener los datos de la criatura
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Criatura</title>
</head>
<body>
    <h1>Editar Criatura</h1>
    <form action="../../src/controllers/CreatureController.php?action=edit&id=<?php echo $id; ?>" method="POST">
        <label>Nombre: <input type="text" name="name" value="<?php echo $creature['name']; ?>"></label><br>
        <label>Descripción: <input type="text" name="description" value="<?php echo $creature['description']; ?>"></label><br>
        <label>Nivel de Vida: <input type="number" name="life_level" value="<?php echo $creature['life_level']; ?>"></label><br>
        <label>Arma: <input type="text" name="weapon" value="<?php echo $creature['weapon']; ?>"></label><br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
