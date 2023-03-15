<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/style.css">
</head>

<body>
  <div class="container position-absolute top-50 start-50 translate-middle w-50">
    <h1 class="text-center">Cadastro</h1>
    <form method="POST" action="php.php">
      <div class="row mb-3 d-flex justify-content-evenly align-items-center">
        <label for="nome_completo" class="text-end col-sm-2 col-form-label w-25">Nome completo:</label>
        <div class="col-sm-10 w-75">
          <input type="text" class="form-control" id="nome_completo" name="nome_completo">
        </div>
      </div>
      <div class="row mb-3 d-flex justify-content-evenly align-items-center">
        <label for="email" class="text-end col-sm-2 col-form-label w-25">Endereço de e-mail:</label>
        <div class="col-sm-10 w-75">
          <input type="text" class="form-control" id="email" name="email">
        </div>
      </div>
      <div class="row mb-3 d-flex justify-content-evenly align-items-center">
        <label for="nome_de_usuario" class="text-end col-sm-2 col-form-label w-25">Nome de usuário:</label>
        <div class="col-sm-10 w-75">
          <input type="text" class="form-control" id="nome_de_usuario" name="nome_de_usuario">
        </div>
      </div>
      <div class="row mb-3 d-flex justify-content-evenly align-items-center">
        <label for="senha" class="text-end col-sm-2 col-form-label w-25">Senha:</label>
        <div class="col-sm-10 w-75">
          <input type="text" class="form-control" id="senha" name="senha">
        </div>
      </div>
      <div class="mb-3 d-flex justify-content-evenly align-items-center">
        <input class="btn btn-outline-primary" type="submit" value="Criar conta">
      </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>