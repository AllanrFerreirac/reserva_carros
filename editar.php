<?php

  include 'conecta.php';

  $id = $_GET["id"];
  $modelo = $_POST["modelo"];
  $placa = $_POST["placa"];
  $ano = $_POST["ano"];
  $estado = $_POST["estado"];
  $manutencao = $_POST["manutencao"];

$sql = "UPDATE cadastro_carro SET modelo = ?, placa = ?, ano = ?, estado = ?, manutencao = ? WHERE id = ?";
$stmt = $conn->prepare($sql) or die($conn->error);

if(!$stmt){
  echo 'Erro na atualização: '. $conn->errno .' - '. $conn->error;
}

$stmt->bind_param('ssissi', $modelo, $placa, $ano, $estado, $manutencao, $id);
$stmt->execute();
$conn->close();
header("Location: cadastro.php#tabs-4");
?>