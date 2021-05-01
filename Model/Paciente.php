<?php

class Paciente {
    private $id;
    private $nome;
    private $teleofone;
    private $cpf;
    private $email;
    private $endereco;
    
    
    public function __set($propriedade, $valor){
        $this->$propriedade = $valor;
    }
    public function __get($propriedade){
        return $this->$propriedade;
    }
}
?>