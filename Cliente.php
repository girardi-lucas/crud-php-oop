<?php

class Cliente extends Usuario
{
    public function __construct($nome, $email, $telefone, $cpf){
        parent::__construct($nome, $email, $telefone, $cpf);
    }


}