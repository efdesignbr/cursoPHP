<?php

$conn = new mysqli('127.0.0.1', 'root', 'efdg0586', 'dbphp7');

if ($conn->connect_error){


echo "erro";
exit;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");

$stmt->bind_param("ss", $login, $pass); //especifica o tipo de dado que recebe da ? acima

$login = "user";
$pass = "12345";

$stmt->execute();

?>