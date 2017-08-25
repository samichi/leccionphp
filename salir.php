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
if (isset($_SESSION['MiSesion'])){
	session_destroy();
  echo " <div class='panel panel-default'><div class='panel-body'>Ha cerrado sesión exitosamente <br/>";
  echo "<a href='login.php' class='btn btn-info' role='button'>Volver</a></div></div>";
}  else{
	echo "<div class='panel panel-default'><div class='panel-body'>ERROR...<br/>";
	echo "<a href='index.php' class='btn btn-info' role='button'>Volver</a></div></div>";
}
?>
</body>
</html>