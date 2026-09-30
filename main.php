<?php

require_once 'Usuario.php';

$cliente = new Usuario();
$cliente->setNome("Lucas");
$cliente->setEmail("lucasbgirardi@gmail.com");
$cliente->setTelefone("11999999999");

$cliente->apresentar();