<?php
include ('includes/funciones.php');
session_start();
if(llaveDefinida('encabezado', $_SESSION) && llaveDefinida('partida', $_SESSION)){
}else{
    header("Location: finalizar.php");
}
$requisicion = [];
$requisicion['encabezado'] = $_SESSION['encabezado'];
$requisicion['partida'] = $_SESSION['partida'];
if(llaveDefinida('requisicion', $_SESSION)){
  array_push( $_SESSION['requisicion'], $requisicion);
}else{
  $_SESSION['requisicion'] = array($requisicion);
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Electricos</title>
</head>
<body>
<?php require_once 'includes/nav.php';?>
  <div class="container">
  <?php require_once 'includes/encabezadoReq.php';?>
  <?php require_once 'includes/tabla.php';?>
  <br>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>

