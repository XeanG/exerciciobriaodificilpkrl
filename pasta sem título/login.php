<!DOCTYPE html>
<html>
  <head>
    <title>Tela de login</title>
  </head>
  <body>
    <h1>Tela de login</h1>
    <form method="post" action="php2.php">
      <label for="username">Usuário:</label>
      <input type="text" id="username" name="username"><br><br>
      <label for="password">Senha:</label>
      <input type="password" id="password" name="password"><br><br>
      <input type="submit" value="Entrar">
    </form>
    <button onclick="window.location.href = 'registro.php';">Criar uma conta</button>
  </body>
</html>