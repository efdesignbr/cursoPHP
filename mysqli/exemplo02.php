<?php

$conn = new mysqli('127.0.0.1', 'root', 'efdg0586', 'dbphp7');

if ($conn->connect_error){

echo "erro";

}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while ($row = $result->fetch_array(MYSQLI_ASSOC)) {

	array_push($data, $row);


}

echo json_encode($data);


?>