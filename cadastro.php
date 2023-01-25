<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="register.css">

    <title>Cadastro</title>
  </head>
  <body>
    
  <?php 
      require 'template-parts/header.php';
      require 'template-parts/config.php';
  ?>

    <div class="titulo">
        <h2>CADASTRE-SE</h2>
    </div>
        <section>
            <div class="container register justify-content-center aling-items-center">
                <div class="card register-ap">
                    <form action="" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputName">Nome</label>
                                <input type="text" id="inputName" class="form-control" placeholder="" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputSurname">Sobrenome</label>
                                <input type="text" class="form-control" id="inputSurname" placeholder="" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Senha</label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Endereço</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Complemento</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputCity">Cidade</label>
                                <input type="text" class="form-control" id="inputCity" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputZip">Cep</label>
                                <input type="text" class="form-control" id="inputZip" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputState">Estado</label>
                                <select id="inputState" class="form-control" required>
                                    <option selected hidden>Escolha...</option>
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                </select>
                            </div>
                        </div>
                        <a class="btn btn-success btn-en" href="login.php" role="button">Concluir</a>
                    </form>
                </div>

            </div>
        </section>
   

        <?php 
      require 'template-parts/footer.php';
    ?>
  </body>
</html>