<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
class creature{
    private $idCreature;
    private $name;
    private $description;
    private $avatar;
    private $attackPower;
    private $lifeLevel;
    private $weapon;
    
    public function __construct($id, $name, $description,$avatar,$attack, $life_level, $weapon) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->avatar = $avatar;
        $this->attackPower = $attack;
        $this->life_level = $life_level;
        $this->weapon = $weapon;
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
}
