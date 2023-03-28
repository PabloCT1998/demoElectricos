<?php
include ('includes/funciones.php');
session_start();
if(llaveDefinida('req', $_POST)){
  $num = $_POST['req'];

  $_SESSION['indexReq'] = $num;
}else{
  $num = $_SESSION['indexReq'];
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
  <?php 
$requisicion = $_SESSION['requisicion'][$num]['encabezado'];
?>
<div class="container">
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
    <div class="row">
        <div class="col-auto">
            <form action="formEditEncabezado.php" method="POST">
                <?php echo '
                <button button type="submit" class="btn btn-primary ms-auto" name="req" value="'.$num.'">
					Editar encabezado
                </button> '?>
            </form>
            
        </div>
    </div>
  </div> 
  <div  class="text-center my-5">
    <h3>Partidas</h3>
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
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $index1 = 0;
          $index2 = 0;
          
            foreach($_SESSION['requisicion'][$num]['partida'] as $p){              
              echo '<tr>';
              foreach($p as $t){
                echo '<td>' . $t . '</td>';
              }
              echo 
                ' <td>
                    <div class="row">
                      <div class="col-5">
                      <form method="POST" action="formEditPartidaG.php">
                      <button type="button submit" class="btn btn-success" name="partida" value="'.$index1.'">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                          </svg>
                        </button>
                        </form>
                      </div>
                      <div class="col-5">
                        <button type="submit"class="btn btn-danger ms-auto" name="'.$index2.'" id="'.$index2.'"data-bs-toggle="modal" data-bs-target="#'.$index2.'">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                          </svg>
                        </button>
                      </div>
                    </div>
                  </td>';
              echo '</tr>';
              echo 
                ' <div class="modal fade" id="'.$index2.'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Partida</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <h1>¿Seguro que quiere eliminar la partida?</h1>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                      <form method="POST" action="borrarPartidaG.php">
                        <button type="button submit" class="btn btn-danger" name="partida" value="'.$index2.'">Eliminar</button>
                      </form>
                    </div>
                  </div>
                </div>
              ';
              $index1++;
              $index2++;
            }
          ?>
        </tbody>
      </table>
    </div>
  <br>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>