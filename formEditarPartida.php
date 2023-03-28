<?php
include ('includes/funciones.php');
session_start();

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
    <div  class="text-center my-5">
      <h3>Partida que desea editar</h3>
      <div class="row">
        <table class="table table-bordered text-center my-5">
          <thead>
            <tr>
              <th>Cantidad</th>
              <th>Artículo SAP</th>
              <th>Art. Proveedor</th>
              <th>Descripción</th>
              <th>U.M.</th>
              <th>Precio Com.</th>
              <th>Importe Com.</th>
              <th>Precio Vta.</th>
              <th>Importe Vta.</th>
              <th>Proveedor</th>
              <th>Comentarios</th>
              <th>Estatus</th>
            </tr>
          </thead>
          <tbody>
            <?php
              echo '<tr>';

              $index = $_POST['partida'];
              $_SESSION['index'] = $index;
              foreach($_SESSION['partida'][$index] as $p){
                echo '<td>' . $p . '</td>';
              }
              echo '</tr>';
            ?>
        </tbody>
      </table>
    </div>
    <h3>Ingrese los datos que desea modificar</h3>
    <form method="POST" class="needs-validation" action="editarPartida.php">
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
              <input type="number"  class="form-control" id="cantidad" name="cantidad" step="any" >
            </div>
            <div class="col-4">
              <input type="text"  class="form-control" id="articuloSAP" name="articuloSAP" >
            </div>
            <div class="col-4">
              <input type="text"  class="form-control" id="artProveedor" name="artProveedor" >
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
                <input type="text"  class="form-control" id="descripcion" name="descripcion">
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
                <select class="form-select" aria-label="Default select example" name="UM" >
                  <option value="">Unidad de Medida</option>
                  <option value="PZA">PZA</option>
                  <option value="ML">ML</option>
                </select>
              </div>
              <div class="col-4">
                <input type="number" step="any" class="form-control" id="precioCompra" name="precioCompra">
              </div>
              <div class="col-4">
                <input type="number"  step="any" class="form-control" id="importeCompra" name="importeCompra">
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
                  <input type="number"  step="any" class="form-control" id="precioVenta" name="precioVenta">
                </div>
                <div class="col-6">
                  <input type="number"  step="any" class="form-control" id="importeVenta" name="importeVenta">
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
                <input type="text"  class="form-control" id="proveedor" name="proveedor">
              </div>
            </div>
            <br>
            <div class="row">
            <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control" name="comentario" placeholder="Leave a comment here" id="comentario" style="height: 100px"></textarea>
                  <label for="comentario">Comentario</label>
                </div>
              </div>
            </div>
            <br>
            <div class="row">
            <div class="col-2">
              <select class="form-select" aria-label="Default select example" name="estatusPartida">
                <option value="">Estatus Partida</option>
                <option value="Registrado">Registrado</option>
                <option value="Procesado">Procesado</option>
                <option value="Colocado">Colocado</option>
                <option value="Surtido">Surtido</option>
                <option value="Cancelado">Cancelado</option>
              </select>
            </div>
          </div>
          <br>
        <div class="row">
            <div class="col-auto">
              <button class="btn btn-primary ms-auto" type="submit">
                Guardar Cambios Partida
              </button>
            </div>
          </div>
        </div>
      </div>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>
