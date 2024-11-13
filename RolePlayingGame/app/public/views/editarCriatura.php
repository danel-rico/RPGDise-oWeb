<?php
//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '\..\..\..\persistance\DAO\CreatureDAO.php');
require_once(dirname(__FILE__) . '\..\..\models\Creature.php');
// Analize session
require_once(dirname(__FILE__) . '\..\..\..\utils\SessionUtils.php');
//Compruebo que me llega por GET el parámetro
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $creatureDAO = new CreatureDAO();
    $creature = $creatureDAO->selectById($id);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>RPG</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="../../../assets/img/small-logo.png" alt="" ></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <img class="img-fluid rounded" src="../../../assets/img/heroesLogo.png" alt="Heroes V Banner">
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link " href="creacionCriatura.php">Crea una criatura</a>
                    </li>
                    <li class="nav-item ">
                        <?php if (isset($error)) {echo $error;} ?>
                    </li>
                </ul>
                    
            </div>  
        </nav>
        <form method="post" action="../../controllers/creature/CreatureController.php">
            <input type="hidden" name="type" value="edit">
            <input type="hidden" id="idCreature" name="idCreature" value="<?php echo $creature->getIdCreature(); ?>">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Name" required>
            <br>
            <label for="description">Description</label>
            <input type="text" id="description" name="description" placeholder="Description" required>
            <br>
            <label for="avatar">Avatar</label>
            <input type="text" id="avatar" name="avatar" placeholder="Avatar URL" required>
            <br>
            <label for="attackPower">Attack Power</label>
            <input type="number" id="attackPower" name="attackPower" placeholder="Attack Power" required>
            <br>
            <label for="lifeLevel">Life Level</label>
            <input type="number" id="lifeLevel" name="lifeLevel" placeholder="Life Level" required>
            <br>
            <label for="weapon">Weapon</label>
            <input type="text" id="weapon" name="weapon" placeholder="Weapon" required>
            <br>
            <button type="submit">Create</button>
        </form>
        
        
        <?php
        // put your code here
        ?>
    </body>
</html>