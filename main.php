<?php

require_once 'Usuario.php';
require_once 'Administrador.php';
require_once 'Cliente.php';

$administrador = new Administrador("Rogerio", "rogerio@gmail.com", "5499999999", "09987609209");
$clienteUm = new Cliente("Lucao", "lucas@gemail.com.br", "540190312", "00673018008");

$listaDeUsuarios = [$administrador, $clienteUm];

foreach ($listaDeUsuarios as $usuario) {
    $usuario->apresentarUsuario();
    echo "\n";
}