<?php
session_start();
?>
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
<?php 
$nombre=$_POST["nombre"];
echo "Insercion de datos en proceso... </br>";
include_once("DemoCollector.php");
$DemoCollectorObj = new DemoCollector();
$DemoCollectorObj->createDemo($nombre);
echo"Insercion de: " . $nombre . " en la base</br>";
?>
<div><a href="login.php">Volver al Inicio</a></div>
</body>
</html>