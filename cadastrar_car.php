<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="content-language" content="pt-br"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <form action="cad_car.php" method="POST">
            <div class="form-group">
                <label>Modelo</label>
                <input type="text" class="form-control" name="modelo" placeholder="Insira o Modelo" required/>
                <br/>
                <label>Placa do Carro</label>
                <input type="placa" class="form-control" name="placa" placeholder="Insira a placa do carro" required/>
                <br/>
                <label>Ano do Carro</label>
                <input type="number" class="form-control" name="ano" placeholder="Insira o ano do carro" required/>
                <br/>
                <label>Estado</label>
                <input type="text" class="form-control" name="estado" placeholder="Insira o estado" required/>
                <br/>
                <label>Selecione se está Disponível ou Indisponível</label>
                <select name="manutencao" class="form-control">
                    <option hidden selected>Clique para selecionar se está Disponível ou Indisponível</option>
                    <option value="Disponivel">Disponível</option>
                    <option value="Indisponivel">Indisponível</option>
                </select>
                <br/>
                <button type="submit" class="btn btn-outline-success">Cadastrar</button>
            </div>
        </form>
    </body>
</html>