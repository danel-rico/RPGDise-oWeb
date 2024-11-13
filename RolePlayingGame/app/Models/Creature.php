<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
class Creature{
    private $idCreature;
    private $name;
    private $description;
    private $avatar;
    private $attackPower;
    private $lifeLevel;
    private $weapon;
    
    public function __construct() {
        
    }

    
   public function getIdCreature(){
       return $this->idCreature;
   } 
   public function setIdCreature($idcreature){
       $this->idCreature = $idcreature;
   }
   public function getName(){
       return $this->name;
   } 
   public function setName($name){
       $this->name = $name;
   }
   public function getDescription(){
       return $this->description;
   } 
   public function setDescription($description){
       $this->description = $description;
   }
   public function getAvatar(){
       return $this->avatar;
   }
   public function setAvatar($avatar){
       $this->avatar = $avatar;
   }
   public function getAttackPower(){
       return $this->attackPower;
   }
   public function setAttackPower($attackPower){
       $this->attackPower = $attackPower;
   }
   public function getLifeLevel(){
       return $this->lifeLevel;
   }
   public function setLifeLevel($lifeLevel){
       $this->lifeLevel = $lifeLevel;
   }
   public function GetWeapon(){
       return $this->weapon;
   }
   public function SetWeapon($weapon){
       $this->weapon = $weapon; 
   }
   function privateOffer2HTML() {
        $result = '<div class="col-md-4">';
        $result .= '<div class="card">';
        $result .= '<div class="card-header text-center">';
        $result .= '<h5 class="card-title">' . $this->getName() . '</h5>';
        $result .= '</div>';
        $result .= '<div class="card-body d-flex">';
        $result .= '<div class="left-half" style="width: 50%;">';
        $result .= '<img src="' . $this->getAvatar() . '" class="card-img-top" alt="Imagen de Criatura" style="width: 100%; height: 240px; object-fit: cover;">';
        $result .= '</div>';
        $result .= '<div class="right-half" style="width: 50%; padding-left: 10%">';
        $result .= '<p class="card-text description">' . $this->getDescription() . '</p>';
        $result .= '</div>';
        $result .= '</div>';
        $result .= '<div class="btn-group card-footer" role="group">';
        $result .= '<a type="button" class="btn btn-primary " href="creatures/detallesCriatura.php?id=' . $this->getIdCreature() . '">Detalles</a>';
        $result .= '<a type="button" class="btn btn-success " href="creatures/editarCriatura.php?id=' . $this->getIdCreature() . '">Modificar</a>';
        $result .= '<a type="button" class="btn btn-danger " href="../../../app/controllers/creature/CreatureController.php?id=' . $this->getIdCreature() . '">Eliminar</a>';
        $result .= '</div>';
        $result .= '</div>';
        $result .= '</div>';
        
        

        return $result;
    }
//Función para pintar cada ofertas
    function publicOffer2HTML() {
        $result = '<div class="col-md-4">';
        $result .= '<div class="card">';
        $result .= '<div class="card-header text-center">';
        $result .= '<h5 class="card-title">' . $this->getName() . '</h5>';
        $result .= '</div>';
        $result .= '<div class="card-body d-flex">';
        $result .= '<div class="left-half" style="width: 50%;">';
        $result .= '<img src="' . $this->getAvatar() . '" class="card-img-top" alt="Imagen de Criatura" style="width: 100%; height: 240px; object-fit: cover;">';
        $result .= '</div>';
        $result .= '<div class="right-half" style="width: 50%; padding-left: 10%">';
        $result .= '<p class="card-text description">' . $this->getDescription() . '</p>';
        $result .= '</div>';
        $result .= '</div>';
        $result .= '<div class="btn-group card-footer" role="group">';
        $result .= '<a type="button" class="btn btn-primary " href="app/public/views/detallesCriatura.php?id=' . $this->getIdCreature() . '">Detalles</a>';
        $result .= '</div>';
        $result .= '</div>';
        $result .= '</div>';


        return $result;
    }
   
   
   
}
