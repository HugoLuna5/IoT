<?php

include('conexion.php');
	
	$temperatura = $_GET['temperatura'];
	$humedad = $_GET['humedad'];

    $sql = "INSERT INTO registro (temperatura, humedad) VALUES ($temperatura,$humedad )";



try {
    $stmt= $pdo->prepare($sql);
    if ($stmt->execute()) {
        # code...
    }else{
        echo "d";
    }
} catch (Exception $e) {
    die( $e->getMessage() );
}


?>