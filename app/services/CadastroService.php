
<?php
require("../contexto/Contexto.php");
require("../models/Usuario.php");
class CadastroService{
    public $conexao;
     public function __construct(){ // se não for um objeto de conexao ou tarefa que venha apresentara um erro
        $this->conexao= new Contexto();
        $this->conexao=$this->conexao->conectar();
      }

      public function Inserir(Usuario $usuario){
       
         $consulta = "insert into usuario(nomeEmpresa,cnpj,endereco,email,senha)
                      values(:nomeEmpresa,:cnpj,:endereco,:email,:senha)";
         $estado=$this->conexao->prepare($consulta);
        
         $estado->bindValue(":nomeEmpresa",$usuario->nomeEmpresa);
       
         $estado -> bindValue(":cnpj",$usuario->cnpj);
         $estado -> bindValue(":endereco",$usuario->endereco);
         $estado -> bindValue(":email",$usuario->email);
         $estado -> bindValue(":senha",$usuario->senha);
          $estado->execute();
      }

     
      public function ExisteUsuario($email){
       
        $consulta = "select case when (select email FROM usuario where email = :email) IS NULL then  false ELSE true  END;";
        $estado=$this->conexao->prepare($consulta);
       
        $estado->bindValue(":email",$email);
      
        $teste= $estado->execute();
        
        return $teste;
     }

}




?>