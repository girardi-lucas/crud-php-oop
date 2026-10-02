<?php

interface Crud {
    public function cadastrar(Usuario $usuario);
    public function listar();
    public function atualizar($cpf, $novoNome, $novoEmail, $novoTelefone);
    public function deletar();
}
