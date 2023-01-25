
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="global.css">
    <title>Login</title>
  </head>
  <body>

  <?php 
      require 'template-parts/header.php';
    ?>

    <section>
      <div class="container log-cadastro">
        <div class="row">
          <div class="col-lg-6 borda">
            <div class="card login-ap">
              <form>
                <h1>Já sou doador</h1>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Senha</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" required>
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Mantenha-me conectado</label>
                </div>
                <a class="btn btn-success btn-login" href="index.php" role="button">Entrar</a>
              </form>
            </div>
            </div>

            <div class="col-lg-6">
              <div class="card cadastro-ap">
                <form>
                  <h1>Criar conta</h1>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                  </div>                                    
                  <a class="btn btn-success btn-register" href="cadastro.php" role="button">Cadastre-se</a>
                </form>                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php 
      require 'template-parts/footer.php';
    ?>


  
  </body>
</html>