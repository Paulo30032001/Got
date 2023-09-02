<?php
require('../services/CadastroService.php');


$nomeEmpresa=$_POST['nomeEmpresa'];
$cnpj=$_POST['cnpj'];
$endereco=$_POST['endereco'];
$email=$_POST['email'];
$senha=$_POST['senha'];

$usuario = new Usuario();
$usuario->nomeEmpresa= $nomeEmpresa;
$usuario->cnpj= $cnpj;
$usuario->endereco= $endereco;
$usuario->email= $email;
$usuario->senha= $senha;
$service = new CadastroService();

$existeUsuario= $service->ExisteUsuario($email);
if($existeUsuario){
    header("Location:/GOT/app/cad.php?usuario=true");
}

$service->Inserir($usuario);
header("Location:/GOT/app/teste.php");

?>