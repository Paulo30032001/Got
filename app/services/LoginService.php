
<?php
require("../contexto/Contexto.php");
require("../models/Usuario.php");
class LoginService{
    public $conexao;
     public function __construct(){ // se não for um objeto de conexao ou tarefa que venha apresentara um erro
        $this->conexao= new Contexto();
        $this->conexao=$this->conexao->conectar();
      }

      
     
      public function Login($email){
        
        $consulta = "select * from usuario where email=:email;";
        $estado=$this->conexao->prepare($consulta);
       
        $estado->bindValue(":email",$email);
      
         $estado->execute();
         
        $dadosUsuario=  $estado ->fetchObject( Usuario :: class);
        
          
         if ($dadosUsuario) {
           
            $usuario = new Usuario();
            $usuario->nomeEmpresa=$dadosUsuario->nomeEmpresa;
            $usuario->cnpj=$dadosUsuario->cnpj;
            $usuario->endereco=$dadosUsuario->endereco;
            $usuario->email=$dadosUsuario->email;
            $usuario->senha=$dadosUsuario->senha;
            $usuario->id=$dadosUsuario->id;
             
          
            return $usuario;
        } else {
            // Usuário não encontrado
            return null;
        }
    }

     

}




?>