<?php

    class Usuario {
        private $id;
        private $nome;
        private $nivel;
        private $usuario;
        private $senha;

    

        public function __set($propriedade, $valor) {
            $this->$propriedade = $valor;
        }

        public function __get($propriedade) {
            return $this->$propriedade;
        }
    }

?>