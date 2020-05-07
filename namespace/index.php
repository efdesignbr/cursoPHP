<?php

require_once("config.php");

use Cliente\Cadastro;  

$cad = new Cadastro();

$cad->setNome("Edson");
$cad->setEmail("edson@edson");
$cad->setSenha("ttttt");

$cad->registrarVenda();

?>