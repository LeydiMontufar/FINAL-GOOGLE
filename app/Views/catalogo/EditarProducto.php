<?php 
    $nombreproducto = $producto[0]['nombreproducto'];
    $detalleproducto = $producto[0]['detallesproducto'];
    $precioproducto = $producto[0]['precioproducto'];
    $cantidadproducto = $producto[0]['cantidadproducto'];
    $imagenproducto = $producto[0]['imagenproducto'];

    $idproducto = $producto[0]['idproducto'];

?>
<?= $this->extend('Layout/menu') ?>
<?= $this->section('contenido') ?>
<br>
<br>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/x-icon" href="/assets/logo-vt.svg" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
  </head>
  <body class="bg-info bg-light d-flex justify-content-center align-items-center vh-100">
  <form method="POST" action="<?php echo base_url() . '/actualizar/producto' ?>">
    <div class="bg-secondary.bg-gradient p-5 rounded-5 text-secondary shadow"
      style="width: 35rem">
      <div class="text-center fs-1 fw-bold">Editar Producto</div>
      <div class="input-group mt-1">
       <div> 
            <div hidden>
                <label for="nombreSeccion">id Producto</label>
                <input type="text" name="idproducto"" id="idproducto" class="form-control" value="<?php echo $idproducto; ?>">
            </div>
            <div>
            
                <label for="nombreSeccion">Nombre Producto</label>
                <input type="text" name="nombreproducto"" id="nombreproducto" class="form-control" value="<?php echo $nombreproducto; ?>">
            </div>
            <div>
                <label for="descripcion">Detaller Mueble</label>
                <input type="text" name="detalleproducto" id="detalleproducto" class="form-control" value="<?php echo $detalleproducto; ?>">
            </div>
            <div>
                <label for="descripcion">Precio</label>
                <input type="text" name="precioproducto" id="precioproducto" class="form-control" value="<?php echo $precioproducto; ?>">
            </div>
            <div>
                <label for="descripcion">Cantidad</label>
                <input type="text" name="cantidadproducto" id="cantidadproducto" class="form-control" value="<?php echo $cantidadproducto; ?>">
            </div>
            <div>
                <label for="descripcion">imagen</label>
                <input type="file" name="imagenproducto" id="imagenproducto" class="form-control" value="<?php echo $imagenproducto; ?>">
            </div>

            <div>
                <button class="btn btn-warning">Guardar</button>
            </div>
    </div>
  </form>
  </body>
</html>
<?= $this->endSection() ?>