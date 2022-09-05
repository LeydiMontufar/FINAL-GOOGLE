
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
    <div
      class="bg-secondary.bg-gradient p-5 rounded-5 text-secondary shadow"
      style="width: 25rem"
    >
      <div class="text-center fs-1 fw-bold">Registro</div>
      <div class="input-group mt-4">
        <div class="input-group-text btn btn-dark">
        <label for="nombreSeccion">correo</label><br>
        </div>
        <input class="form-control bg-light" type="text" placeholder="Correo"/>
      </div>
      <div class="input-group mt-1">
        <div class="input-group-text btn btn-dark">
        <label for="nombreSeccion">Contraseña</label><br>
        </div>
        <input class="form-control bg-light" type="password" placeholder="Contraseña"/>
      </div>
      <div class="input-group mt-1">
        <div class="input-group-text btn btn-dark">
        <label for="nombreSeccion">Usuario</label>
        </div>
        <div class="col-md-8">
			<label for="usuario"></label>
			<select class="form-control" id="usuario" name="usuario">
			<option value="cliente">cliente</option>
            <option value="administrador">adminitrador</option>
            </select>
		</div>
      </div>
      <div class="btn btn-dark text-white w-100 mt-4 fw-semibold shadow-sm">
        Resgistrar
      </div>
      </div>
    </div>
  </body>
</html>
