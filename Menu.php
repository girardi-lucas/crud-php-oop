<?php
require_once 'GestorUsuarios.php';

class Menu
{
    public function abrirMenu(){
        $opcao = '';
        while ($opcao !== '0') {
        echo "Menu de Opções:\n";
        echo "1 - Cadastrar usuário\n";
        echo "2 - Listar usuários\n";
        echo "3 - Editar cadastro\n";
        echo "4 - Deletar cadastro\n";
        echo "0 - Sair\n";
        $opcao = readline("Escolha uma opção: ");

        switch ($opcao) {
            case '1':
                $this->cadastrarUsuario();
                break;
            case '2':
                $this->listarUsuarios();
                break;
            case '3':
                $this->editarUsuario();
                break;
            case '4':
                $this->deletarUsuario();
                break;
            case '0':
                echo "Saindo do sistema...\n";
                break;
            default:
                echo "Opção inválida. Digite uma opção válida.\n";
        }
    }

}
}