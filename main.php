<?php

require_once 'Usuario.php';

$cliente = new Usuario("sanfona", "lucas@gmail.com", "5454545454");

echo $cliente->getNome();