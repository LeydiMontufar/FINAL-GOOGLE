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
    <div class="bg-secondary.bg-gradient p-5 rounded-5 text-secondary shadow mt-1" style="width: 75rem">
      <div class="text-center fs-1 fw-bold">CATALOGO</div>
      <div class="input-group mt-1">
       <div> 
       <div>
           <div class="tab-pane fade show" id="pills-lunch" role="tabpanel" aria-labelledby="pills-lunch-tab" tabindex="0">
           <?php foreach ($catalogo as $item): ?>
            <div class="row gy-3">
              <div class="col-lg-5 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <div class="col">
                    <div class="card h-100">
                      <img src="<?php echo base_url();?>.../assets/images/1.jpg" class="card-img-top">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $item->nombreproducto?></h5>
                            <p class="card-text"><?php echo $item->detallesproducto?></p>
                            <p class="card-text"><?php echo $item->precioproducto?></p>
                              <a href="#" class="btn btn-primary">-----</a>
                              <a href="<?php echo base_url() . '/editar/producto/'.$item->idproducto ?>" class="btn btn-primary">Editar</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
        <?php endforeach ?>

        
                        

                    </div>
                  </div>
            </div>

      </div>
      </div>
    </div>
    </div>
  </div>
</body>
</html>

<?= $this->endSection() ?>
