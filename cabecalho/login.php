<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=], initial-scale=1.0" />
  <link rel="stylesheet" href="style2.css" />
  <link rel="stylesheet" href="style.css">
  <title>Bazaar Old</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
</head>

<body>
  <?php require_once "cabecalho.php"; ?>

  <div class="menu_login">
    <form method="post" action="processa_login.php">
      <h1>Iniciar sessão</h1>
      <label for="username">Usuário:</label>
      <input type="text" id="username" name="username" required placeholder="Digite seu e-mail" />

      <label for="password">Senha:</label>
      <input type="password" id="password" name="password" required placeholder="Digite sua senha" />

      <input type="submit" value="Login" />
    </form>
  </div>

  <?php require_once "rodape.php"; ?>
</body>

</html>