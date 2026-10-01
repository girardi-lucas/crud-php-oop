<?php

abstract class Usuario {
    protected $nome;
    protected $email;
    protected $telefone;

    protected $cpf;

    public function __construct($nome, $email, $telefone, $cpf) {
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setTelefone($telefone);
        $this->setCpf($cpf);
    }

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
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getCpf() {
        return $this->cpf;
    }
    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    // Apresentação do usuário

    public function apresentarUsuario(){
        echo "Olá, meu nome é $this->nome, meu email é $this->email e meu telefone é $this->telefone, e meu cpf é $this->cpf.";
    }
}