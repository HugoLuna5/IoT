<?php

include('conexion.php');


$stmt = $pdo->query("SELECT * FROM registro")->fetchAll();

foreach($stmt as $row) {
   
    echo "<tr>";
    echo '<th scope="row">'.$row['id'].'</th>';
    echo '<td>'.$row['temperatura'].'</td>';
    echo '<td>'.$row['humedad'].'</td>';
    echo '<td>'.$row['registro'].'</td>';
    echo '<tr>';



}



?>