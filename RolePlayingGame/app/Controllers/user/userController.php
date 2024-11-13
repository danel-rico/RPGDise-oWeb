<?php
//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '/../../../app/models/validations/ValidationsRules.php');

require_once(dirname(__FILE__) . '/../../../utils/SessionUtils.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
            checkAction();
           
}


function checkAction() {
   
    
    $user = ($_POST["user"]);
    $contra = ($_POST["pass"]);
    
    if($user=="danel"&&$contra =="rico"){
        SessionUtils::startSessionIfNotStarted();
        SessionUtils::setSession($user);
    
        header('Location: ../../../app/private/views/index.php');
    }else
    {
        // TODO No existe
        header('Location: ../../../app/public/views/index.php?error=ErrorLogin');    
    }

    
        
}

    