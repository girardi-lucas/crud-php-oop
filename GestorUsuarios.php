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
        echo "Lista de usuários:\n";
        return $this->listaUsuarios;

    }

    public function atualizar($indice, Usuario $usuario)
    {
        $this->listaUsuarios[$indice] = $usuario;
        echo "Usuário atualizado com sucesso: " . $usuario->getNome() . "\n";
    }

    public function deletar($indice)
    {
        unset($this->listaUsuarios[$indice]);
        $this->listaUsuarios = array_values($this->listaUsuarios); // Reindexa o array após a exclusão
        echo "Usuário deletado com sucesso.\n";
    }
}