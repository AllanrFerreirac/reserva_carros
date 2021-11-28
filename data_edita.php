<?php

  include 'conecta.php';

  $id = $_GET["id"];
  $data_inicio = $_POST["data_inicio"];
  $data_final = $_POST["data_final"];

$sql = "UPDATE cadastro_carro SET data_inicio = ?, data_final = ? WHERE id = ?";
$stmt = $conn->prepare($sql) or die($conn->error);

if(!$stmt){
  echo 'Erro na atualização: '. $conn->errno .' - '. $conn->error;
}

$stmt->bind_param('ddi', $data_inicio, $data_final, $id);
$stmt->execute();
$conn->close();
header("Location: reservar.php#tabs-4");
?>