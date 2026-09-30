<?php

class Administrador extends Usuario
{
    private $nivelDeAcesso;
    public function __construct($nome, $email, $telefone, $nivelDeAcesso){
        parent::__construct($nome, $email, $telefone);
        $this->nivelDeAcesso = $nivelDeAcesso;
    }

    public function getNivelDeAcesso(){
        return $this->nivelDeAcesso;
    }

    public function setNivelDeAcesso($nivelDeAcesso){
        $this->nivelDeAcesso = $nivelDeAcesso;
    }


    public function apresentarUsuario(){
        echo "Olá, me chamo " . $this->getNome() . " e tenho credencial de acesso : " . $this->getNivelDeAcesso();
    }
}