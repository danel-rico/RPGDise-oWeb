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
        
        
        <?php
        // put your code here
        ?>
    </body>
</html>