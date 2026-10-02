<?php

require_once 'Usuario.php';
require_once 'Administrador.php';
require_once 'Cliente.php';
require_once 'Interface.php';
require_once 'GestorUsuarios.php';
require_once 'Menu.php';

$gestorUsuarios = new GestorUsuarios();
$menu = new Menu($gestorUsuarios);
$menu->abrirMenu();
