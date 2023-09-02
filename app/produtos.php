<?php
session_start();
if(!isset($_SESSION["usuario"]) ){
  header("Location:/GOT/app/teste.php");
  
}
?>

<h1>Produtos</h1>

<a href="/GOT/app/controllers/LoginController.php?acao=sair">Sair</a>