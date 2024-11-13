<?php
//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '/../../../persistance/DAO/CreatureDAO.php');
require_once(dirname(__FILE__) . '/../../../app/models/Creature.php');
require_once(dirname(__FILE__) . '/../../../app/models/validations/ValidationsRules.php');


$_creatureController = new CreatureController();

// Enrutamiento de las acciones
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["type"] == "create"){
        $_creatureController->createAction();
    }
    else if ($_POST["type"] == "edit"){
        $_creatureController->editAction();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    //Llamo que hace la edición contra BD
    $_creatureController->deleteAction();
}

class CreatureController{
    
    /**
     * Parameterless constractor.
     */
    public function __construct() {
    }
    
    // Obtención de la lista completa de criaturas
    function readAction() {
        $creatureDAO = new CreatureDAO();
        return $creatureDAO->selectAll();
    }
    
    // Función encargada de crear nuevas criaturas
    function createAction() {
        // Obtención de los valores del formulario y validación
        $name = ValidationsRules::test_input($_POST["name"]);
        $description = ValidationsRules::test_input($_POST["description"]);
        $avatar = ValidationsRules::test_input($_POST["avatar"]);
        $attackPower = ValidationsRules::test_input($_POST["attackPower"]);
        $lifeLevel = ValidationsRules::test_input($_POST["lifeLevel"]);
        $weapon = ValidationsRules::test_input($_POST["weapon"]);
        // Creación de objeto auxiliar   
        $creature = new Creature();
        $creature->setName($name);
        $creature->setDescription($description);
        $creature->setAvatar($avatar);
        $creature->setAttackPower($attackPower);
        $creature->setLifeLevel($lifeLevel);
        $creature->SetWeapon($weapon);
            
        $creatureDAO = new CreatureDAO();
        $creatureDAO->insert($creature);

        header('Location: ../../../index.php');
    }

    // Función encargada de editar nuevas criaturas
    function editAction() {
        // Obtención de los valores del formulario y validación    
        $id = $_POST["idCreature"];
        $name = $_POST["name"];
        $description = $_POST["description"];
        $avatar= $_POST["avatar"];
        $attackPower= $_POST["attackPower"];
        $lifeLevel = $_POST["lifeLevel"];
        $weapon = $_POST["weapon"];
        // Creación de objeto auxiliar   
        $creature = new Creature();
        $creature->setIdCreature($id);
        $creature->setName($name);
        $creature->setDescription($description);
        $creature->setAvatar($avatar);
        $creature->setAttackPower($attackPower);
        $creature->setLifeLevel($lifeLevel);
        $creature->SetWeapon($weapon);
        //Creamos un objeto CreatureDAO para hacer las llamadas a la BD
        $creatureDAO = new CreatureDAO();
        $creatureDAO->update($creature);

        header('Location: ../../../index.php');
    }

    function deleteAction() {
        $id = $_GET["id"];

        $creatureDAO = new CreatureDAO();
        $creatureDAO->delete($id);

        header('Location: ../../../index.php');
    }
    
    
}



?>