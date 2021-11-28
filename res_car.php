<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="content-language" content="pt-br"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <?php
            //include 'conecta.php';
               // $id = $_GET['id'];
               // $sql = "SELECT * FROM cadastro_carro WHERE id = $id";
               // $query = $conn->query($sql);
               // while($dados = $query->fetch_assoc()){
                   // $data_inicio = $dados['data_inicio'];
               // }
        ?>
        <form action="data_edita.php?id=<?php echo $id; ?>" method="POST">
            <div class="form-group">
                <div class="form-group">
                    <label>Data Inicio da Reserva</label>
                    <input type="date" class="form-control" name="data_inicio" placeholder="Insira a Data Inicial" required/>
                    <br/>  
                    <div class="form-group">
                    <label>Data Final da Reserva</label>
                    <input type="date" class="form-control" name="data_final" placeholder="Insira a Data Fianl" required/>
                    <br/>  
                    <button type="submit" class="btn btn-outline-success">Reservar</button>
                </div>    
            </div>
        </form>
    </body>
</html>