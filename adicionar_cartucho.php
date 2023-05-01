<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Cartucho</title>
  <?php
  session_start();
  if (!isset($_SESSION['username']) == true) {
    session_destroy();
    header('location:index.php');
  }
  ?>
</head>

<body>
  <div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light justify-content-center px-4 px-lg-5 py-3 py-lg-0 bg-white">
      <?php
      $usr = $_SESSION['username'];
      echo "<div class='navbar-nav py-0'>
          <span class='nav-item'>$usr</span>
          </div>
          <div class='navbar-nav py-0'>
          <div class='vr ms-2'></div>";
      if ($_SESSION["admin"] == 1) {
        echo "<a href='admin.php' class='nav-item nav-link'>Administrador</a>
          <a href='cartucho.php' class='nav-item nav-link active'>Adicionar cartuchos</a>
          <a href='mostrar_cartuchos.php' class='nav-item nav-link'>Cartuchos</a>
          <a href='pesquisa.php' class='nav-item nav-link'>Pesquisa produto</a>
          <a href='logout.php' class='nav-item nav-link'>Sair</a>";
      } else {
        echo "<a href='cartucho.php' class='nav-item nav-link active'>Adicionar cartuchos</a>
          <a href='mostrar_cartuchos.php' class='nav-item nav-link'>Seus cartuchos</a>
          <a href='pesquisa.php' class='nav-item nav-link'>Pesquisa produto</a>
          <a href='logout.php' class='nav-item nav-link'>Sair</a>";
      }
      ?>
  </div>
  </nav>
  </div>
  <div class="container position-absolute top-50 start-50 translate-middle w-75 h-75 d-flex align-items-evenly justify-items-center row">
    <?php
    $nome_cartucho_cd = $_POST['nome_cartucho_cd'];
    $ano = $_POST['ano'];
    $sistema = $_POST['sistema'];
    $imagem = $_FILES['tela']["tmp_name"];
    $id_usuario = $_SESSION['id'];

    if ($imagem != NULL) {
      $nomeFinal = time() . '.jpg';
      if (move_uploaded_file($imagem, $nomeFinal)) {
        $tamanhoImg = filesize($nomeFinal);

        $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));

        //Conexão com o banco de dados
        $conn = new mysqli('localhost', 'root', '', 'AHAHAHABORGES');
        // Checa a conexão
        if ($conn->connect_error) {
          die("Conexão falhou: " . $conn->connect_error);
        }

        // Insere os dados no banco de dados
        $sql = "INSERT INTO cartuchos (nome_cartucho_cd, ano, sistema, tela, id_usuario) VALUES ('$nome_cartucho_cd', '$ano', '$sistema', '$mysqlImg', '$id_usuario')";
        $result = $conn->query($sql);

        unlink($nomeFinal);

        if ($result === true) {
          echo "<h2>Novo cartucho adicionado com sucesso!</h2>";
        } else {
          echo "<h2>Erro: </h2><p>" . $sql . "</p><p>" . $conn->error . "</p>";
        }

        $conn->close();
      }
    }
    ?>
  </div>
</body>

</html>