<?php
$conn = mysqli_connect("localhost","root","","reserva_carro");
mysqli_set_charset($conn,"utf8");
if (!$conn){
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error(). PHP_EOL;
    exit;
}
?> 