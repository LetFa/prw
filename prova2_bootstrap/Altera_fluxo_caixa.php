<?php
   include('conexao.php');
   $id_fluxo_caixa = $_GET['id_fluxo_caixa'];
   $sql = 'SELECT * FROM fluxo_caixa where id_fluxo_caixa='.$id_fluxo_caixa;
   $result = mysqli_query($con, $sql);
   $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Fluxo de Caixa</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <style>
         .center {
            margin-top: 20px;
         }
    </style>
</head>
<body>
        
    <div class="container col-6 center">     
            <h1 class="center">Alteração de Fluxo de Caixa</h1>
        <form  method="post" action="Cadastro_fluxo_caixa.php" enctype='multipart/form-data'>
                <div class="form-group">
                    <label>Data:</label>
                    <input type="date" class="form-control" name="data" id="data" aria-describedby="data"  value="<?php echo $row['data']?>">
                    <small id="data" name="data" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label>Tipo:</label>
                    <input type="radio" class="tipo" name="tipo" id="tipo" aria-describedby="tipo"  value="<?php echo $row['tipo']?>"> Entrada
                    <input type="radio" class="tipo" name="tipo" id="tipo" aria-describedby="tipo"  value="<?php echo $row['tipo']?>"> Saída
                    <small id="tipo" name="tipo" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label>Valor:</label>
                    <input type="valor" class="form-control" name="valor" id="valor" aria-describedby="valor"  value="<?php echo $row['valor']?>">
                    <small id="valor" name="valor" class="form-text text-muted"></small>
                </div>
                 
                <div class="form-group">
                    <label>Histórico:</label>
                    <input type="historico" class="form-control" name="historico" id="historico" aria-describedby="historico"  value="<?php echo $row['historico']?>">
                    <small id="historico" name="historico" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label>Cheque:</label>
                    <select name="cheque">
                    <option value="<?php echo $row['cheque']?>" >Não</option>
                    <option value="<?php echo $row['cheque']?>" >Sim</option>
                    </select>
                    <small id="historico" name="historico" class="form-text text-muted"></small>
                </div>
                <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Clique em mim</label>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            <a href="index.php">Voltar</a> 
                <input name="id_fluxo_caixa" type="hidden" value="<?php echo $row['id_fluxo_caixa']?>">
            </fieldset>
        </form>
    </div>
</body>
</html>