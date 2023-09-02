<?php
session_start();
if(isset($_SESSION["usuario"]) ){
    header("Location:/GOT/app/teste.php");
    
}
require('../services/LoginService.php');

$email=$_POST['email'];
$senha=$_POST['senha'];
$acao= $_GET['acao'];

if($acao == 'sair'){
    session_destroy();
    header("Location:/GOT/app/teste.php");
}

$service = new LoginService();

$usuario= $service->Login($email);
if($usuario == null || $usuario->senha != $senha){
    header("Location:/GOT/teste.php?erro=true");
}

$_SESSION['usuario']= $usuario;

header("Location:/GOT/app/produtos.php");



?>