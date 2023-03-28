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
            foreach($_SESSION['partida'] as $p){
              echo '<tr>';
              foreach($p as $t){
                echo '<td>' . $t . '</td>';
              }
              echo '</tr>';
            }
          ?>
        </tbody>
      </table>
    </div>
  <br>