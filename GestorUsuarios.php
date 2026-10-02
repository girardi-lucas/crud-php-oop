<?php

class GestorUsuarios implements Crud
{

    private $listaUsuarios = [];

    public function cadastrar(Usuario $usuario)
    {
        $this->listaUsuarios[] = $usuario;
        echo "Usuário cadastrado com sucesso: " . $usuario->getNome() . "\n";
    }

    public function listar()
    {
        return $this->listaUsuarios;
    }

    public function atualizar()
    {

    }

    public function deletar()
    {
        // Implementation for deleting a user
    }
}