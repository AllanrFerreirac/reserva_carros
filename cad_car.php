<?php 
    include 'conecta.php';
    $modelo = $_POST['modelo'];
    $placa = $_POST['placa'];
    $ano = $_POST['ano'];
    $estado = $_POST['estado'];
    $manutencao = $_POST['manutencao'];
    $sql= "INSERT INTO cadastro_carro(modelo,placa,ano,estado,manutencao) VALUES ('$modelo','$placa','$ano','$estado','$manutencao')";
    if(mysqli_query($conn,$sql)){
        echo "<script language='javascript' type='text/javascript'> 
          alert('Registro inserido com sucesso!');
          window.location.href='cadastro.php';
          </script>";
    }
    else {
        echo "<script language='javascript' type='text/javascript'> 
          alert('Não foi possível inserir este registro!');
          window.location.href='cadastro.php'
          </script>";
    }
    mysqli_close($conn);
?>