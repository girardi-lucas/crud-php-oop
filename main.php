<?php

require_once 'Usuario.php';
require_once 'Administrador.php';

$cliente = new Usuario("sanfona", "lucas@gmail.com", "5454545454");
$administrador = new Administrador("Rogerio", "rogerio@gmail.com", "5499999999", "Master");


$administrador->apresentarUsuario();
echo $cliente->getEmail();