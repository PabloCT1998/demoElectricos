<?php
include ('includes/funciones.php');
session_start();
if(llaveDefinida('encabezado', $_SESSION)){
  
}else{
  header("Location: error.html");
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
<?php require_once 'includes/encabezadoReq.php';?>
 <div class="container">
    <?php if(llaveDefinida('partida',$_SESSION) && $_SESSION['partida'] != null){
      require_once 'includes/tabla.php';}
    ?>
    <div  class="text-center my-5">
    <h3>Ingrese los datos de la Partida</h3>
  </div>
  <div class="container-fluid">
    <form method="POST" class="needs-validation" action="guardarPartida.php">
    <div class="row">
        <div class="col-4">
          <label for="cantidad">Cantidad</label>
        </div>   
        <div class="col-4">
          <label for="articuloSAP">Artículo SAP</label>
        </div>
        <div class="col-4">
          <label for="artProveedor">Artículo Proveedor </label>
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <input type="number"  class="form-control" id="cantidad" name="cantidad" step="any" required="required">
        </div>
        <div class="col-4">
          <input type="text"  class="form-control" id="articuloSAP" name="articuloSAP"  required="required">
        </div>
        <div class="col-4">
          <input type="text"  class="form-control" id="artProveedor" name="artProveedor" required="required">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-12">
          <label for="descripcion">Descripción</label>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <input type="text"  class="form-control" id="descripcion" name="descripcion" required="required">
        </div>
      </div>
      <br>
      <div class="row">
      <div class="col-4">
          <label for="UM">Unidad de Medida: </label>
        </div>
        <div class="col-4">
          <label for="precioCompra">Precio de Compra</label>
        </div>
        <div class="col-4">
          <label for="importeCompra">Importe Compra</label>
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <select class="form-select" aria-label="Default select example" name="UM" required>
            <option value="">Unidad de Medida</option>
            <option value="PZA">PZA</option>
            <option value="ML">ML</option>
          </select>
        </div>
        <div class="col-4">
          <input type="number" step="any" class="form-control" id="precioCompra" name="precioCompra" required="required">
        </div>
        <div class="col-4">
          <input type="number"  step="any" class="form-control" id="importeCompra" name="importeCompra"  required="required">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-6">
            <label for="precioVenta">Precio de Venta</label>
        </div>
        <div class="col-6">
          <label for="importeVenta">Importe de Venta</label>
        </div>
      </div>
        <div class="row">
          <div class="col-6">
            <input type="number"  step="any" class="form-control" id="precioVenta" name="precioVenta" required="required">
          </div>
          <div class="col-6">
            <input type="number"  step="any" class="form-control" id="importeVenta" name="importeVenta" required="required">
          </div>
        </div>
        <br><br>
      <div class="row">
        <div class="col-auto">
          <label for="proveedor">Proveedor:</label>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <input type="text"  class="form-control" id="proveedor" name="proveedor" required="required">
        </div>
      </div>
      <br>
      <div class="row">
      <div class="col-12">
          <div class="form-floating">
            <textarea class="form-control" name="comentario" placeholder="Leave a comment here" id="comentario" style="height: 100px" required="required"></textarea>
            <label for="comentario">Comentario</label>
          </div>
        </div>
      </div>
      <br>
    <div class="row">
      <div class="col-auto">
          <label for="estatusPartida">Estatus</label>
      </div>
    </div>
    <div class="row">
      <div class="col-2">
        <select class="form-select" aria-label="Default select example" name="estatusPartida" required>
          <option value="Registrado">Registrado</option>
        </select>
      </div>
    </div>
      <br>
      <button type="submit" class="btn btn-primary ms-auto">
		    Agregar Partida
	    </button>
    </form>
  </div>
 </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>
