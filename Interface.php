<?php

interface Crud {
    public function cadastrar(Usuario $usuario);
    public function listar();
    public function atualizar($indice, Usuario $usuario);
    public function deletar($indice);
}
