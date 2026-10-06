<?php

class Menu
{
    private $gestorUsuarios;

    public function __construct(GestorUsuarios $gestorUsuarios)
    {
        $this->gestorUsuarios = $gestorUsuarios;
    }

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
                $cliente = $this->cadastrarUsuario();
                if ($cliente === null) {
                    echo "Cadastro cancelado devido a dados inválidos.\n";
                    break;
                }
                $this->gestorUsuarios->cadastrar($cliente);
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
    public function cadastrarUsuario() {
        echo "Cadastro de Usuário:\n";

        $nome = readline("Digite o nome: ");
        if (empty($nome)) {
            echo "Nome não pode ser vazio. Cadastro cancelado.\n";
            return null;
        } else if (strlen($nome) < 3) {
            echo "Nome deve ter pelo menos 3 caracteres. Cadastro cancelado.\n";
            return null;
        } else if (!preg_match("/^[a-zA-Z\s]+$/", $nome)) {
            echo "Nome deve conter apenas letras e espaços. Cadastro cancelado.\n";
            return null;
        }

        $email = readline("Digite o email: ");
        if (empty($email)) {
            echo "Email não pode ser vazio. Cadastro cancelado.\n";
            return null;
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email inválido. Cadastro cancelado.\n";
            return null;
        }

        $telefone = readline("Digite o telefone: ");
        if (empty($telefone)) {
            echo "Telefone não pode ser vazio. Cadastro cancelado.\n";
            return null;
        } else if (!preg_match("/^\d{10,11}$/", $telefone)) {
            echo "Telefone inválido. Deve conter apenas números e ter 10 ou 11 dígitos. Cadastro cancelado.\n";
            return null;
        }

        $cpf = readline("Digite o CPF: ");
        if (empty($cpf)) {
            echo "CPF não pode ser vazio. Cadastro cancelado.\n";
            return null;
        } else if (!preg_match("/^\d{11}$/", $cpf)) {
            echo "CPF inválido. Deve conter apenas números e ter 11 dígitos. Cadastro cancelado.\n";
            return null;
        }

        $cliente = new Cliente($nome, $email, $telefone, $cpf);

        return $cliente;
    }

    public function listarUsuarios() {
        if (empty($this->gestorUsuarios->listar())) {
            echo "Nenhum usuário cadastrado.\n";
            return;
        }
        foreach ($this->gestorUsuarios->listar() as $usuario) {
            echo "Nome: " . $usuario->getNome() . "\n" . "Email: " . $usuario->getEmail() . "\n" . "Telefone: " . $usuario->getTelefone() . "\n" . "CPF: " . $usuario->getCpf() . "\n";

        }
    }

    public function editarUsuario() {
        $usuarios = $this->gestorUsuarios->listar();
        foreach ($usuarios as $indice => $usuario) {
            echo ($indice + 1) . " - Nome: " . $usuario->getNome() . "\n";
        }

        $escolha = filter_var(readline("Escolha o número do usuário que deseja editar: "), FILTER_VALIDATE_INT);

        $indice = $escolha === false ? -1 : $escolha - 1;

        if (!isset($usuarios[$indice])) {
            echo "Usuário inválido.\n";
            return;
        } else {

            $nome = readline("Digite o novo nome: ");
            if (empty($nome)) {
                echo "Nome não pode ser vazio. Cadastro cancelado.\n";
                return null;
            } else if (strlen($nome) < 3) {
                echo "Nome deve ter pelo menos 3 caracteres. Cadastro cancelado.\n";
                return null;
            } else if (!preg_match("/^[a-zA-Z\s]+$/", $nome)) {
                echo "Nome deve conter apenas letras e espaços. Cadastro cancelado.\n";
                return null;
            }

            $email = readline("Digite o novo email: ");

            if (empty($email)) {
                echo "Email não pode ser vazio. Cadastro cancelado.\n";
                return null;
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Email inválido. Cadastro cancelado.\n";
                return null;
            }

            $telefone = readline("Digite o novo telefone: ");

            if (empty($telefone)) {
                echo "Telefone não pode ser vazio. Cadastro cancelado.\n";
                return null;
            } else if (!preg_match("/^\d{10,11}$/", $telefone)) {
                echo "Telefone inválido. Deve conter apenas números e ter 10 ou 11 dígitos. Cadastro cancelado.\n";
                return null;
            }

            $cpf = readline("Digite o novo CPF: ");

            if (empty($cpf)) {
                echo "CPF não pode ser vazio. Cadastro cancelado.\n";
                return null;
            } else if (!preg_match("/^\d{11}$/", $cpf)) {
                echo "CPF inválido. Deve conter apenas números e ter 11 dígitos. Cadastro cancelado.\n";
                return null;
            }

        }

        $usuarioAtualizado = new Cliente($nome, $email, $telefone, $cpf);
        $this->gestorUsuarios->atualizar($indice, $usuarioAtualizado);


    }

    public function deletarUsuario() {
        if (empty($this->gestorUsuarios->listar())) {
            echo "Nenhum usuário cadastrado.\n";
            return;
        }

        $usuarios = $this->gestorUsuarios->listar();
        foreach ($usuarios as $indice => $usuario) {
            echo ($indice + 1) . " - Nome: " . $usuario->getNome() . "\n";
        }
        $escolha = filter_var(readline("Escolha o número do usuário que deseja deletar: "), FILTER_VALIDATE_INT);
        $indice = $escolha === false ? -1 : $escolha - 1;

        if (!isset($usuarios[$indice])) {
            echo "Usuário inválido.\n";
            return;
        } else {
            $this->gestorUsuarios->deletar($indice);
        }
    }
}
