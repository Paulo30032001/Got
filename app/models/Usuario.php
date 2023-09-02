<?php
class Usuario {
    public $nomeEmpresa;
    public $cnpj;
    public $endereco;
    public $email;
    public $senha;
    
    public function __construct($nomeEmpresa,$cnpj,$endereco,$email,$senha)
    {
        $this->nomeEmpresa= $nomeEmpresa;
        $this->cnpj= $cnpj;
        $this->endereco= $endereco;
        $this->email= $email;
        $this->senha= $senha;
        
    }
}