<?php

class Usuario {
    private $nome;
    private $email;
    private $telefone;

    // Getters e Setters

    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    // Apresentação do usuário

    public function apresentar(){
        echo "Olá, meu nome é $this->nome, meu email é $this->email e meu telefone é $this->telefone.";
    }
}

