<?php

require_once "DB.php";

    class Formulario{
        public $id;
        private $nome;
        private $email;
        private $profissao;
        private $genero;
        private $area_de_interesse;
        private $faleconosco;
        private $promocao;
        private $senha;

        public function __construct($id = '', $nome = '', 
        $email = '', $profissao = '', 
        $genero = '', $area_de_interesse = '',
        $faleconosco = '',
        $promocao = '',
        $senha = '')
        {
            $this->id = $id;
            $this->nome = $nome;
            $this->email = $email;
            $this->profissao = $profissao;
            $this->genero = $genero;
            $this->area_de_interesse = $area_de_interesse;
            $this->faleconosco = $faleconosco; 
            $this->promocao = $promocao;
            $this->senha = $senha;

        }

        public function getNome(){return $this->nome;}
        public function getEmail(){return $this->email;}
        public function getProfissao(){return $this->profissao;}
        public function getGenero(){return $this->genero;}
        public function getArea_de_interesse(){return $this->area_de_interesse;}
        public function getFaleconosco(){return $this->faleconosco;}
        public function getPromocao(){return $this->promocao;}
        public function getSenha(){return $this->senha;}

    }
    
?>