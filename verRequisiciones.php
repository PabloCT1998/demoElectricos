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
    <div  class="text-center my-5">
      <h3>Requisiciones</h3>
    </div>
    <div class="row">
      <table class="table table-bordered text-center my-5">
        <thead>
          <tr>
            <th>No. Requisición</th>
            <th>Fecha</th>
            <th>Vendedor</th>
            <th>Comprador</th>
            <th>Email Comprador</th>
            <th>Estatus Requisción</th>
            <th>Ver Req.</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $index = 0;
          $index2 = 0;
            foreach($_SESSION['requisicion']as $r){              
              echo '<tr>';
              foreach($r['encabezado'] as $e){
                if($e != null){
                  echo '<td>' . $e . '</td>';
                }
              }
              echo 
              ' <td>
                  <div class="row justify-content-sm-center h-100">
                    <div class="col-auto">
                    <form method="POST" action="verReq.php">
                    <button type="button submit" class="btn btn-success" name="req" value="'.$index.'">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                      </svg>
                      </button>
                      </form>
                    </div>
                    <div class="col-auto">
                    
                    <button type="submit"class="btn btn-danger ms-auto" name="'.$index2.'" id="'.$index2.'"data-bs-toggle="modal" data-bs-target="#'.$index2.'">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                          </svg>
                      </button>
                  </td>';
              echo '</tr>';
              echo 
                ' <div class="modal fade" id="'.$index2.'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Requisición</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <h1>¿Seguro que quiere eliminar la Requisición?</h1>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                      <form method="POST" action="eliminarReq.php">
                        <button type="button submit" class="btn btn-danger" name="req" value="'.$index2.'">Eliminar</button>
                      </form>
                    </div>
                  </div>
                </div>
              ';
              $index++;
              $index2++;
            }
          ?>
        </tbody>
      </table>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>