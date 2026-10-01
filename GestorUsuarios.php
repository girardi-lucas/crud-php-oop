<?php

class GestorUsuarios
{

    private $listaUsuarios = [];

    public function adicionarUsuario(Usuario $usuario)
    {
        $this->listaUsuarios[] = $usuario;
    }

    public function contarUsuarios()
    {
        $totalUsuarios = count($this->listaUsuarios);
        return $totalUsuarios;
    }

    public function mostrarUsuarios()
    {
        if (empty($this->listaUsuarios)) {
            echo "Nenhum usuário cadastrado.\n";
            return;
        }
        foreach ($this->listaUsuarios as $usuario) {
            $usuario->apresentarUsuario();
            echo "\n";
        }
    }
}