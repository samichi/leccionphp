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
//Obtener el valor del ID que viene del metodo GET a traves de http
$nombre="";
$iddemo="";
include_once("DemoCollector.php");
include_once("Demo.php");
$DemoCollectorObj = new DemoCollector();
$ObjDemo = new Demo($iddemo,$nombre);
?>
<div class="container">
  <h2>Crear el Objeto Demo</h2>
  <form class="form-horizontal" action="formdemocreate.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd" name="nombre" value="<?php echo $ObjDemo->setNombre($nombre); ?>" />
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" value="Guardar">Submit</button>
        <a href="login.php">Cancelar</a>
      </div>
    </div>
  </form>
</div>
</body>
</html>