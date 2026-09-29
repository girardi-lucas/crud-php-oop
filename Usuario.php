<?php

class Usuario {
    public $nome;
    public $email;
    public $telefone;

    public function apresentar(){
        echo "Olá, meu nome é $this->nome, meu email é $this->email e meu telefone é $this->telefone.";
    }
}

