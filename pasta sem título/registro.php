<!DOCTYPE html>
<html>
  <head>
    <title>Cadastro</title>
  </head>
  <body>
    <h1>Cadastro</h1>
    <form method="post" action="php.php">
      <label for="nome_completo">Nome completo:</label>
      <input type="text" id="nome_completo" name="nome_completo"><br><br>
      <label for="email">Endereço de e-mail:</label>
      <input type="email" id="email" name="email"><br><br>
      <label for="nome_de_usuario">Nome de usuário:</label>
      <input type="text" id="nome_de_usuario" name="nome_de_usuario"><br><br>
      <label for="senha">Senha:</label>
      <input type="password" id="senha" name="senha"><br><br>
      <input type="submit" value="Criar conta">
    </form>
  </body>
</html>
