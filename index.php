<?php

require_once "vendor/autoload.php";

use Muinha\Produto\Cadastro as Pcadastro;
use Muinha\Usuario\Cadastro as Ucadastro;


$usuario = new Ucadastro();

$produto = new Pcadastro();

var_dump($usuario, $produto);
