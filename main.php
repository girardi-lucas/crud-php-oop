<?php

require_once 'Usuario.php';

$cliente = new Usuario();
$cliente->nome = "Lucas";
$cliente->email = "lucasbgirardi@gmail.com";
$cliente->telefone = "11999999999";

$cliente->apresentar();