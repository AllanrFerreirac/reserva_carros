<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="content-language" content="pt-br"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Reserva de carros</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <div class="container-fluid" style="background-image: linear-gradient(#4169E1, #87CEEB)">
        <div>
            <a href="index.php" button type="submit" class="btn btn-secondary btn-sm">Inicio</button></a>
        </div>    
        <header>
            <center><img src="imagem/carro.png" width="35%" height="30%"/></center>
            </header>
        <div class="container-fluid">
            <section>
                <br/>
                <div class="row justify-content-center row-cols-2 row-cols-md-2 mb-3 text-center">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-hearder py-3">
                                <h4 class="my-0 fw-normal"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/></svg>&nbsp;<b>Confirmar Reservar</b></h4>
                                </div>
                                <div class="row row-cols-2 row-cols-md-1 mb-3 text-center">
                                <div class="col">
                                    <div class="card mb-4 rounded-3 shadow-sm">
                                    <div class="card-body">
                                    <?php
                                        include 'conecta.php';
                                        $id = $_GET['id'];
                                        $sql = "SELECT * FROM cadastro_carro WHERE id = $id";
                                        $query = $conn->query($sql);
                                        while($dados = $query->fetch_assoc()){
                                            $modelo = $dados['modelo'];
                                            $placa = $dados['placa'];
                                            $ano = $dados['ano'];
                                            $estado = $dados['estado'];
                                            $manutencao = $dados['manutencao'];
                                            $data_inicio = $dados['data_inicio'];
                                            $data_final = $dados['data_final'];
                                        }
                                    ?>
                                <form <?php echo $id; ?> method="POST">
                                <div class="form-group">
                                    <label><b>Modelo: </b></label>
                                    <label><?php echo $modelo; ?>" </label>
                                    <br/>
                                    <label><b>Placa: </b></label>
                                    <label><?php echo $placa; ?>" </label>
                                    <br/>
                                    <label><b>Ano: </b></label>
                                    <label><?php echo $ano; ?>" </label>
                                    <br/>
                                    <label><b>Estado: </b></label>
                                    <label><?php echo $estado; ?>" </label>
                                    <br/>
                                    <label><b>Data Inicio da Reserva: </b></label>
                                    <label><?php echo $data_inicio; ?>" </label>
                                    <br/>
                                    <label><b>Data Final da Reserva: </b></label>
                                    <label><?php echo $data_final; ?>" </label>
                                    <br/>
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer>
            <hr/>
            <center><b>Desenvolvido por Allan Ferreira - 2021</b></center>
        </footer>
    </body>
</html>