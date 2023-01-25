
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="global.css">
    <title>Adoptme</title>
  </head>
  <body>

    <?php 
      require 'template-parts/header.php';
      require 'template-parts/config.php';
    ?>

   <main>
        <div class="container estilo">
            <div class="row">
                <div class="teste">
                  <?php require 'template-parts/posts.php'; ?>
                </div>
            </div>
        </div>
   </main>

   <?php 
      require 'template-parts/footer.php';
   ?>

  </body>
</html>