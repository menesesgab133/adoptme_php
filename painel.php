<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="global.css">
    <title>Painel</title>
  </head>
  <body>
     
  <?php 
      require 'template-parts/header.php';
    ?>

     <section>
        <div class="anc">
            <h1>Faça sua doação. Quem ama, cuida!</h1>
        </div>
         <div class="container mt-5 painel">
             <div class="row d-flex justify-content-center">
                 <div class="col-lg-8">
                     <div class="card painel">
                         <div class="card-body">
                             <form action="cadastrar_painel.php" method="POST">
                                <div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Raça</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="raca">
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descricacao"></textarea>
                                      </div>
                                    <div class="mb-3">
                                      <label for="exampleInputPassword1" class="form-label">Fotos</label>
                                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="link">
                                    </div>
                                   
                                    <button type="submit" class="btn  btn-success">Enviar</button>
                                  </div>
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