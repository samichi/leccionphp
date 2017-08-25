<!DOCTYPE html>
<html lang="en">
<head>
  <title>FORM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Clases PHP</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
    </ul>
  </div>
</nav>
<div class="container">

<?php

include_once("PerfilCollector.php");

$id =2;

$PerfilCollectorObj = new PerfilCollector();
  echo "<div class='container'>";
  echo "<table class='table'>";
  echo "  <thead>";
  echo "   <tr>";
  echo "   <th>Id</th>";
  echo "   <th>Nombre</th>";
  echo "   <th>Tipo</th>";
  echo "   <th>Imagen</th>";
  echo "   <th>FechaNacimiento</th>";
  echo "   <th>Accion</th>"; 
  echo "   </tr>";
  echo " </thead>";
  echo "<tbody>";

foreach ($PerfilCollectorObj->showPerfils() as $c){
  echo "<tr>";
  echo "<td>" . $c->getId() . "</td><td>" . $c->getNombre() . "</td><td>" . $c->getTipo() . "</td><td>" . $c->getImagen() . "</td><td>" . $c->getFechaNacimiento() . "</td>";
  echo "<td>      <a href='perfil.php?id=".$c->getId()."' class='btn btn-info' role='button'>Ver</a> </td>     ";
  echo "</tr>"; 
}

echo "</tbody>";
echo "</table>";
echo "</div>";
echo "<div><a href='formdemoinsert.php' class='btn btn-info' role='button'>New Perfil</a></div></div>";
  ?>
</div>
</body>
</html>




