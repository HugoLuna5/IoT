<?php

try {
	
$host = "localhost";
$DB = 'iot_example';
$user = "root";
$pass = "";

$pdo = new PDO("mysql:host=".$host.";dbname=".$DB.";charset=utf8", $user, $pass);
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $erro) {
	echo "Error de conexion :c, revisa esto: ".$erro->getMessage();
}




?>