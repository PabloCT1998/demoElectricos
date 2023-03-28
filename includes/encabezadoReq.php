<?php 
$requisicion = $_SESSION['encabezado'];
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
  </div>