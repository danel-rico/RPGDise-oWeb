<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../models/Creature.php';
require_once __DIR__ . '/../persistence/CreatureDAO.php';

class CreatureController {
    private $creatureDAO;

    public function __construct() {
        $database = new Database();
        $dbConnection = $database->getConnection();
        $this->creatureDAO = new CreatureDAO($dbConnection);
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $attackPower = $_POST['attack_power'];
            $lifeLevel = $_POST['life_level'];
            $weapon = $_POST['weapon'];

            $creature = new Creature($name, $description, $attackPower, $lifeLevel, $weapon);

            if ($this->creatureDAO->insert($creature)) {
                header("Location: ../public/creature/index.php"); // Redirige a la lista de criaturas
                exit();
            } else {
                echo "Error al guardar la criatura.";
            }
        }
    }
}

// Llama al método correspondiente según la acción
$controller = new CreatureController();
if (isset($_GET['action']) && $_GET['action'] === 'create') {
    $controller->create();
}
