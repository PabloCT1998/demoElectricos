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
