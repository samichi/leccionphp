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
<?php

$id=$_GET["id"];
include_once("perfilCollector.php");
include_once("Perfil.php");
$PerfilCollectorObj = new PerfilCollector();
$ObjPerfil = $PerfilCollectorObj->showPerfil($id);
?>






<div class="row content">
    <div class="col-sm-3 sidenav">
      <image src="<?php echo $ObjPerfil->getImagen(); ?>" class="img-responsive" />
    </div>

<div class="col-sm-9">
      <form class="form-horizontal" action="index.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="Usuario">Nombre:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="usuario" name="nombre" value="<?php echo $ObjPerfil->getNombre(); ?>" readonly/>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Tipo:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd" name="tipo" value="<?php echo $ObjPerfil->getTipo(); ?>" readonly/>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Fecha Nacimiento:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd" name="fechanacimiento" value="<?php echo $ObjPerfil->getFechaNacimiento(); ?>" readonly/>
      </div>
    </div>
    
  </form>
</div>
</div>
<div class="col-sm-12">
  <br/>
  <br/>
  <div class="col-sm-6"><a href='formdemoinsert.php' class='btn btn-info' role='button'>Editar</a></div>
  <div class="col-sm-6"><a href='formdemoinsert.php' class='btn btn-info' role='button'>eliminar</a></div>
</div>

</body>
</html>
