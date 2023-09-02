
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
  <div class="login-box">
    <h2>Speed Storage</h2>
    <form method="POST" action="controllers/CadastroController.php">
      <div class="user-box">
        <input type="text" name="nomeEmpresa" required="">
        <label>Nome da Empresa</label>
      </div>
      <div class="user-box">
        <input type="text" name="cnpj" required="">
        <label>CNPJ</label>
      </div>
      <div class="user-box">
        <input type="text" name="endereco" required="">
        <label>Endereço</label>
      </div>
      <div class="user-box">
        <input type="email" name="email" required="">
        <label>Email</label>
      </div>
      <div class="user-box">
        <input type="password" name="senha" required="">
        <label>Senha</label>
      </div>
      <div class="user-box">
        <input type="password" name="" required="">
        <label>Confirmar Senha</label>
      </div>
       <div>
        <?php
        if (isset($_GET["usuario"]) && $_GET["usuario"] == true  ){
          ?>    
          <div style="font-size: 20px;color: red;">
            usuario ou senha invalidos
         </div>
           
           <?php } // tudo que estiver dentro desse bloco está dentro do if idependente de estar em html ou php
           ?> 
       </div>

      <button class="log" type="submit">
        Cadastrar
      </button>

      <a class="log" href="teste.html">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Login
      </a>
    </form>
  </div>
</body>

</html>