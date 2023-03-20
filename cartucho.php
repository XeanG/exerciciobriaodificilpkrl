<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="/css/style.css">
  <title>Cartucho</title>
</head>

<body>
  <div class="container position-absolute top-50 start-50 translate-middle w-50">
    <h1 class="text-center">Adicionar cartucho</h1>
    <form action="adicionar_cartucho.php" method="post">
      <div class="row mb-3 d-flex justify-content-evenly align-items-center">
        <label for="nome_cartucho_cd" class="text-end col-sm-2 col-form-label w-25">Cartucho/CD:</label>
        <div class="col-sm-10 w-50">
          <input type="text" class="form-control" id="nome_cartucho_cd" name="nome_cartucho_cd">
        </div>
      </div>
      <div class="row mb-3 d-flex justify-content-evenly align-items-center">
        <label for="sistema" class="text-end col-sm-2 col-form-label w-25">Sistema:</label>
        <div class="col-sm-10 w-50">
          <input type="text" class="form-control" id="sistema" name="sistema">
        </div>
      </div>
      <div class="row mb-3 d-flex justify-content-evenly align-items-center">
        <label for="tela" class="text-end col-sm-2 col-form-label w-25">Tela:</label>
        <div class="col-sm-10 w-50">
          <input type="text" class="form-control" id="tela" name="tela">
        </div>
      </div>
      <div class="mb-3 d-flex justify-content-evenly align-items-center">
        <input class="btn btn-outline-primary" type="submit" value="Adicionar">
        <input class="btn btn-outline-primary" type="button" value="Painel do Administrador" onclick="window.location.href = 'admin.php';">
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>