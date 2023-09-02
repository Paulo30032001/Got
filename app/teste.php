<?php
session_start();
if(isset($_SESSION["usuario"]) ){
  header("Location:/GOT/app/produtos.php");
  
}
?>
<!doctype html>
<html lang="en">
<head>
  <title>Speed Storage</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="styles.css" rel="stylesheet">
  <link href='htpps://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
    <link rel="icon" type="image/png" href="ss.png">
</head>
<body>
  <div class="login-box" >
    <h2>Login</h2>
    <form method="POST" action="controllers/LoginController.php">
      <div class="user-box">
        <input type="text" name="email" required>
        <label>E-mail</label>
      </div>
      <div class="user-box">
        <input type="password" name="senha" required>
        <label>Senha</label>
      </div>
      <button type="submit">
      Entrar
      </button>
      <a class="cad"    href="cad.php">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Cadastrar
      </a>
    </form>
  </div>
</body>
</html>
