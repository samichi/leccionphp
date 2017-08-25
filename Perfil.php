<?php

class Perfil
{
    private $id;
    private $nombre;
    private $tipo;
    private $imagen;
    private $fechanacimiento;
    
     function __construct($id, $nombre, $tipo, $imagen, $fechanacimiento) {
       $this->id = $id;
       $this->nombre = $nombre;
       $this->tipo = $tipo;
       $this->imagen = $imagen;
       $this->fechanacimiento = $fechanacimiento;
     }
    
     function setId($id){
       $this->id = $id;
     } 
     function getId(){
       return $this->id;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }
     function setTipo($tipo){
       $this->tipo = $tipo;
     } 
     function getTipo(){
       return $this->tipo;
     }
     function setImagen($imagen){
       $this->imagen = $imagen;
     } 
     function getImagen(){
       return $this->imagen;
     }
     function setFechaNacimiento($fechanacimiento){
       $this->fechanacimiento = $fechanacimiento;
     } 
     function getFechaNacimiento(){
       return $this->fechanacimiento;
     }

}

?> 
