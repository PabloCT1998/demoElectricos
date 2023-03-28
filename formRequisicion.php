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
  <div  class="text-center my-5">
    <h3>Ingrese los datos de la Requisición</h3>
  </div>
  <div class="container-fluid">
    <form method="POST" class="needs-validation" action="crearRequisicion.php">
      <div class="row">
        <div class="col-auto">
          <label for="numRequisicion">No. Requisición: </label>
        </div>
        <div class="col-auto">
          <input type="text"  class="form-control" id="numRequisicion" name="numRequisicion" placeholder="No. Requisición" required="required">
        </div>
        <div class="col-auto">
          <label for="fechaRequisicion">Fecha: </label>
        </div>
        <div class="col-auto">
          <input type="date"  class="form-control" id="fechaRequisicion" name="fechaRequisicion" placeholder="Fecha Requisición" required="required">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-auto">
          <label for="fechaRequisicion">Vendedor: </label>
        </div>
        <div class="col-auto">
          <select class="form-select" aria-label="Default select example" name="vendedor" required>
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
            <select class="form-select" aria-label="Default select example" name="comprador" required>
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
            <select class="form-select" aria-label="Default select example" name="emailComprador" required>
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
          <label for="fletesIA">Fletes Importe Autorizado: </label>
        </div>
        <div class="col-auto">
          <input type="number" step="any" class="form-control" id="fletesIA" name="fletesIA" placeholder="Fletes Importe Autorizado">
        </div>
        <div class="col-auto">
          <label for="fletesP">Fletes a Pagar: </label>
        </div>
        <div class="col-auto">
          <input type="number" step="any" class="form-control" id="fletesP" placeholder="Fletes a Pagar">
        </div>
        <div class="col-auto">
          <label for="adjDoc">Adjuntar Documentos: </label>
        </div>
        <div class="col-2">
          <input type="file"  class="form-control" id="adjDoc" name="adjDoc">
        </div>
        <div class="col-auto">
          <label for="estatusReq">Estatus Requisicion: </label>
        </div>
        <div class="col-auto">
            <select class="form-select" aria-label="Default select example" name=" estatusReq" required>
                <option value="Registrado">Registrado</option>
            </select>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-auto">
          <button type="submit" class="btn btn-primary mb-3">Guardar Nueva Requisición</button>
        </div>
      </div>
    </form>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>