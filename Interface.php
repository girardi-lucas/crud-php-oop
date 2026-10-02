<?php

interface Crud {
    public function cadastrar(Usuario $usuario);
    public function listar();
    public function atualizar();
    public function deletar();
}
