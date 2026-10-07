<?php

class Administrador extends Usuario
{

   protected $nivelDeAcesso;
    public function __construct($nome, $email, $telefone, $cpf){
        parent::__construct($nome, $email, $telefone, $cpf);
        $this->nivelDeAcesso = "Master";
    }

    public function getNivelDeAcesso(){
        return $this->nivelDeAcesso;
    }

    public function setNivelDeAcesso($nivelDeAcesso){
        $this->nivelDeAcesso = $nivelDeAcesso;
    }


    public function apresentarUsuario(){
        echo "Olá, meu nome é $this->nome, meu email é $this->email e meu telefone é $this->telefone, e meu cpf é $this->cpf e tenho credenciais: " . $this->getNivelDeAcesso();
    }
}