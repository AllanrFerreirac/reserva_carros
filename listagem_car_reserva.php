<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-language" content="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reserva de Carros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <div class="row row-cols-2 row-cols-md-1 mb-4 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-body">
            <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Modelo</th> 
                <th scope="col">Placa</th>
                <th scope="col">Ano</th>
                <th scope="col">Estado</th>
                <th scope="col">Manutenção</th>
                <th scope="col">Data/Hora Inicio</th>
                <th scope="col">Data/Hora Final</th>
                <th scope="col">Reservar</th>
            </tr>
            </thead>
            <tbody>
            <?php
            include 'conecta.php';
            $pesquisa = mysqli_query($conn, "SELECT * FROM cadastro_carro");
            $row = mysqli_num_rows($pesquisa);
            if($row > 0){
                while($registro = $pesquisa-> fetch_array()){
                    $data_inicio = $registro['data_inicio'];
                    $data_final = $registro['data_final'];
                    $id = $registro['id'];
                    echo '<tr>';
                    echo '<td>'.$registro['modelo'].'</td>';
                    echo '<td>'.$registro['placa'].'</td>';
                    echo '<td>'.$registro['ano'].'</td>';
                    echo '<td>'.$registro['estado'].'</td>';
                    echo '<td>'.$registro['manutencao'].'</td>';
                    echo '<td>'.date("d/m/Y", strtotime($data_inicio)).'</td>';
                    echo '<td>'.date("d/m/Y", strtotime($data_final)).'</td>';
                    echo '<td><a href="res_car.php?id='.$id.'"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-calendar2-date" viewBox="0 0 16 16">
                    <path d="M6.445 12.688V7.354h-.633A12.6 12.6 0 0 0 4.5 8.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z"/>
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"/>
                    <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"/>
                    </svg></button></a></td>';
                    echo '</tr>';
                }
                echo '</tbody>';
                echo '</table>';
            }
            else {
                echo "Não há registros inseridos!!!";
                echo '</tbody>';
                echo '</table>';
            }
            ?>
          </div>
        </div>
      </div>
    </div>
    </div>
  </body>
</html>