<?php

include_once('Perfil.php');
include_once('Collector.php');

class PerfilCollector extends Collector
{
  
  function showPerfils() {
    $rows = self::$db->getRows("SELECT * FROM perfil");    //arreglo de objetos bidimensionales    
    //echo "linea 1";
    $arrayPerfil= array();        
    foreach ($rows as $c){  //Objeto demo
      $aux = new Perfil($c{'id'},$c{'nombre'},$c{'tipo'},$c{'imagen'}, $c{'fechanacimiento'}); //Crea un objeto demo
      array_push($arrayPerfil, $aux); //Guarda una coleccion de demo
    }
    return $arrayPerfil;        
  }

  //Envia el id para editar el campo en el php

  function showPerfil($id){
    $row = self::$db->getRows("SELECT * FROM perfil WHERE id= ?", array("{$id}"));
    $ObjPerfil = new Perfil($row[0]{'id'}, $row[0]{'nombre'}, $row[0]{'tipo'}, $row[0]{'imagen'}, $row[0]{'fechanacimiento'});
    return $ObjPerfil;
  }

  function updatePerfil($id, $nombre, $tipo, $imagen, $fechanacimiento){
    $insertrow = self::$db->updateRow("UPDATE public.perfil SET nombre = ? AND tipo = ? AND imagen = ? AND fechanacimiento = ? WHERE id = ? ", array( "{$nombre}", "{$tipo}"," {$imagen}", "{$fechanacimiento}", $id));
  }

  function deletePerfil($id){
    $deleterow = self::$db->deleteRow("DELETE FROM public.perfil WHERE id= ?", array("{$id}"));
    
  }

  function createPerfil($nombre, $tipo, $imagen, $fechanacimiento){
    $insertrow = self::$db->insertRow("INSERT INTO public.perfil(nombre, tipo, imagen, fechanacimiento) VALUES (?, ?, ?, ?)", array("{$nombre}", "{$tipo}", "{$imagen}", "{$fechanacimiento}"));
  }

}
?>

