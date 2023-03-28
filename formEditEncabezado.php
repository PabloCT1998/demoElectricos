<?php
include ('includes/funciones.php');
session_start();
$num = $_POST['req'];
$_SESSION['indexReq'] = $num;
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
  <?php 
$requisicion = $_SESSION['requisicion'][$num]['encabezado'];
?>

<div class="container">
    <div  class="text-center my-5">
        <h3>Encabezdo que se quiere editar</h3>
    </div>
    
    <br>
    <div class="row">
        <div class="col-4">
            <?php echo '<h3>Requisición No.' . $requisicion['numRequisicion'].'</h3>';?>
        </div>
        <div class="col-7">
            <?php echo '<p class="fs-5"><b> Fecha: </b>' . $requisicion['fechaRequisicion'] . '</p>';?>
        </div>
    </div>
    <div class="row">
        <div class="col-auto">
            <?php echo '<p class="fs-5"><b> Vendedor: </b>' . $requisicion['vendedor'] . '</p>';?>
        </div>
    </div>
    <div class="row">
        <div class="col-auto">
            <?php echo '<p class="fs-5"><b> Comprador: </b>' . $requisicion['comprador'] . '</p>';?>
        </div>
        <div class="col-auto">
            <?php echo '<p class="fs-5"><b> Email Comprador: </b>' . $requisicion['emailComprador'] . '</p>';?>
        </div>
        <div class="col-auto">
            <?php echo '<p class="fs-5"><b> Estatus Requisición: </b>' . $requisicion['estatusReq'] . '</p>';?>
        </div>
    </div>
    <br>
    <div class="container-fluid">
    <form method="POST" class="needs-validation" action="editarEncabezado.php">
      <div class="row">
        <div class="col-auto">
          <label for="numRequisicion">No. Requisición: </label>
        </div>
        <div class="col-auto">
          <input type="text"  class="form-control" id="numRequisicion" name="numRequisicion" placeholder="No. Requisición" >
        </div>
        <div class="col-auto">
          <label for="fechaRequisicion">Fecha: </label>
        </div>
        <div class="col-auto">
          <input type="date"  class="form-control" id="fechaRequisicion" name="fechaRequisicion" placeholder="Fecha Requisición" >
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-auto">
          <label for="fechaRequisicion">Vendedor: </label>
        </div>
        <div class="col-auto">
          <select class="form-select" aria-label="Default select example" name="vendedor">
                <option value="">Vendedor</option>
                <option value="Sebastian Colina">Sebastian Colina</option>
                <option value="Ricardo Fernandez">Diana Hernandez</option>
                <option value="Arantza Bernal">Sebastian Bernal</option>
            </select>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-auto">
          <label for="comprador">Comprador:</label>
        </div>
        <div class="col-auto">
            <select class="form-select" aria-label="Default select example" name="comprador">
                <option value="">Comprador</option>
                <option value="Karina Vargas">Karina Vargas</option>
                <option value="Diana Hernandez">Diana Hernandez</option>
                <option value="Sebastian Bernal">Sebastian Bernal</option>
            </select>
        </div>
        <div class="col-auto">
          <label for="emailComprador">Email del Comprador: </label>
        </div>
        <div class="col-auto">
            <select class="form-select" aria-label="Default select example" name="emailComprador">
                <option value="">Email Comprador</option>
                <option value="Kariv@electricos.com">Kariv@electricos.com</option>
                <option value="dianaHern@electricos.com">dianaHern@electricos.com</option>
                <option value="sebasBernal01@electricos.com">sebasBernal01@electricos.com</option>
            </select>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-auto">
          <label for="estatusReq">Estatur Requisición: </label>
        </div>
        <div class="col-auto">
            <select class="form-select" aria-label="Default select example" name="estatusReq" >
                <option value="">Estatus Requisición</option>
                <option value="Registrado">Registrado</option>
                <option value="Procesado">Procesad</option>
                <option value="Colocado">Colocado</option>
                <option value="Surtido">Surtido</option>
                <option value="Registrado">Cancelado</option>
            </select>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-auto">
            <button button type="submit" class="btn btn-primary ms-auto">
					Editar encabezado
			</button> 
        </div>
    </div>
  </div> 
</div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>