<?php
//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
    require_once(dirname(__FILE__) . '/app/controllers/creature/CreatureController.php');
//Recupero de la BD todos los empleos a través del controlador
$creatureController = new CreatureController();
$creatures = $creatureController->readAction();
// Gestión de sesión
require_once(dirname(__FILE__) . '/utils/SessionUtils.php');
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
            <a class="navbar-brand" href="#"><img src="assets/img/fotonavbar.png" alt="" ></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a  class="nav-link " href="app/public/views/creacionCriatura.php">Crea una criatura</a>
                    </li>
                    <li class="nav-item ">
                        <?php if (isset($error)) {echo $error;} ?>
                    </li>
                </ul>
                    
            </div>  
        </nav>
        <br><br><br>
        <div class="container mt-4">
            <div class="row">
                <!-- Imagen grande -->
                <div class="col-md-8">
                    <img src="assets/img/heroesV.png" class="img-fluid" alt="Heroes V">
                </div>
                <!-- Texto y botón de llamada a la acción -->
                <div class="col-md-4 d-flex flex-column justify-content-center">
                    <h3>Comunidad de usuarios de Heroes</h3>
                    <p>La aventura comienza aquí, en tu navegador</p>
                    <a href="#" class="btn btn-primary">Juega ahora!</a>
                </div>
            </div>
        </div>
        <br><br>
        
        
        <?php
        for ($i = 0; $i < sizeof($creatures); $i+=3) {
            ?>
            <div class="card-group"> 
           <!--  <div class="row">  -->
            <?php
            for ($j = $i; $j < ($i + 3); $j++) {
                if (isset($creatures[$j])) {

                    echo $creatures[$j]->privateOffer2HTML();
                }
            }
            ?>
            </div> 
            <!-- /.row -->
                <?php
            }
            ?>
    </body>
</html>