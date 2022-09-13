<?= $this->extend('Layout/menu') ?>
<?= $this->section('contenido') ?>

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
    <div class="bg-secondary.bg-gradient p-5 rounded-5 text-secondary shadow" style="width: 80rem">
      <div class="text-center fs-1 fw-bold">Lista de Producto</div>
      <div class="input-group mt-1">
       <div> 
        <ul class="list-group list-group-horizontal">
            <li class="list-group-item" style="width: 5rem">ID</li>
            <li class="list-group-item" style="width: 11rem">NOMBRE</li>
            <li class="list-group-item" style="width: 25rem">DESCRIPCION</li>
            <li class="list-group-item" style="width: 6rem">PRECIO</li>
            <li class="list-group-item" style="width: 6rem">UNIDAD</li>
            <li class="list-group-item" style="width: 10rem">IMAGEN</li>
            <li class="list-group-item" style="width: 10rem">OPCION</li>
        </ul>

        <?php foreach ($catalogo as $item): ?>
        <ul class="list-group list-group-horizontal">
            <li class="list-group-item" style="width: 5rem"></li>
            <li class="list-group-item" style="width: 11rem">
              <h5 class="card-title"><?php echo $item->nombreproducto?></h5>
            </li>
            <li class="list-group-item" style="width: 25rem">
              <p class="card-text"><?php echo $item->detallesproducto?></p>
            </li>
            <li class="list-group-item" style="width: 6rem">
              <p class="card-text"><?php echo $item->precioproducto?></p>
            </li>
            <li class="list-group-item" style="width: 6rem"></li>
            <li class="list-group-item" style="width: 10rem"></li>
            <li class="list-group-item" style="width: 10rem">
                <button type="button" class="btn btn-outline-success href="<?php echo base_url() . '/editar/producto/'.$item->idproducto ?>">Editar</button>
            </li>
        </ul>
        <?php endforeach ?>
    </div>
  </body>
</html>
<?= $this->endSection() ?>