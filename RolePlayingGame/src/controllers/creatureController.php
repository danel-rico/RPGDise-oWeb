<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../models/Creature.php';

class creatureController {
    private $db;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
    }

    public function create($name, $description, $life_level, $weapon) {
        // Lógica para crear una nueva criatura en la base de datos
    }

    public function getById($id) {
        // Lógica para obtener una criatura por ID
    }

    public function update($id, $name, $description, $life_level, $weapon) {
        // Lógica para actualizar una criatura
    }

    public function delete($id) {
        // Lógica para eliminar una criatura
    }
}

