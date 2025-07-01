<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <div class="container">
        <div class="row my-5">
            <div class="col-md-6 mx-auto">
                <div class="card shadow-sm p-5">
                    <div class="card-header bg-whithe text-center">
                        <h3 calss="mt-2">Login</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf
                            <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="email" 
                            id="floatingInput" placeholder="Correo electrónico">
                            <label for="floatingInput">Correo electrónico</label>
                            </div>
                            <div class="form-floating mb-3"> //mb-3 con eso se le agrega un margen button de 3
                            <input type="password" class="form-control" name="password" 
                             id="floatingPassword" placeholder="Contraseña">
                            <label for="floatingPassword">Contraseña</label>
                            </div>
                            <div class="mb-2">
                                <button type="submit" class="btn btn-lg btn-primary">
                                    Iniciar sesión
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>