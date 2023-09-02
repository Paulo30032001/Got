<?php


 class Contexto{
    private $stringConexao =("mysql:host=localhost;dbname=got");
    private $usuario = "root";
    private $senha = "";
    public function __construct(){

    }
 
    public function  conectar () : PDO | null {
        try{
            $conexao = new PDO("$this->stringConexao","$this->usuario","$this->senha");
            return $conexao;
        }
        catch(Exception $e){
            echo "ERRO". $e->getcode(). "MENSAGEM". $e->getMessage();
      
        }

        return null;
    }
  
    

}