# CRUD PHP OOP

Projeto de refatoração de um CRUD procedural para Orientação a Objetos em PHP. A aplicação roda no terminal e permite cadastrar, listar, atualizar e deletar usuários.

## Funcionalidades

- Cadastrar usuário
- Listar usuários
- Atualizar usuário
- Deletar usuário

Os usuários podem ser do tipo **Cliente** ou **Administrador**.

## Conceitos de OOP aplicados

- **Abstração:** `Usuario` é uma classe abstrata com os dados em comum (nome, email, telefone e CPF).
- **Herança:** `Cliente` e `Administrador` estendem `Usuario`.
- **Interface:** `Crud` define o contrato das operações (`cadastrar`, `listar`, `atualizar`, `deletar`).
- **Encapsulamento:** atributos `protected` com getters e setters.
- **Polimorfismo:** o `GestorUsuarios` trabalha com qualquer subclasse de `Usuario`.

## Estrutura do projeto

```
.
├── Administrador.php    # Classe filha de Usuario
├── Cliente.php          # Classe filha de Usuario
├── GestorUsuarios.php   # Implementa Crud e guarda os usuários em memória
├── Interface.php        # Interface Crud
├── Menu.php             # Menu de interação no terminal
├── Usuario.php          # Classe abstrata base
└── main.php             # Ponto de entrada
```

## Requisitos

- PHP 7.4 ou superior

## Como executar

1. Clone o repositório:

   ```bash
   git clone https://github.com/girardi-lucas/crud-php-oop.git
   ```

2. Entre na pasta do projeto:

   ```bash
   cd crud-php-oop
   ```

3. Execute o arquivo principal:

   ```bash
   php main.php
   ```

## Observações

Os dados são armazenados apenas em memória (array), portanto são perdidos quando o programa é encerrado.

## Próximos passos

- [ ] Persistência dos dados (MySQL com PDO ou arquivo JSON)
- [ ] Validação de CPF, email e telefone
- [ ] Tratamento de índices inexistentes na atualização e exclusão
- [ ] Autoload com Composer (PSR-4)

## Autor

[girardi-lucas](https://github.com/girardi-lucas)
