<?php

class GestorUsuarios implements Crud
{

    private $listaUsuarios = [];

    public function cadastrar(Usuario $usuario)
    {
        $this->listaUsuarios[] = $usuario;
    }

    public function listar()
    {
        return $this->listaUsuarios;
    }

    public function atualizar($cpf, $novoNome, $novoEmail, $novoTelefone)
    {

    }

    public function deletar()
    {
        // Implementation for deleting a user
    }
}