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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Cadastro de Fluxo de Caixa</h1>
    <div id="teste">
        <form method="post" action="altera_fluxo_caixa_exe.php" enctype='multipart/form-data'>
            <fieldset>
                <div class="form-item">
                    <label for="data">Data:</label>
                    <input type="date" id="data" name="data" value="<?php echo $row['data']?>">
                </div>
                <br>
                <div class="form-item">
                     <label for="tipo">Tipo:</label>
                    <input type="radio" id="tipo" name="tipo" value="<?php echo $row['tipo']?>">Entrada
                    <input type="radio" id="tipo" name="tipo" value="<?php echo $row['tipo']?>">Saída
                </div>
                <br>
                <div class="form-item">
                    <label for="valor">Valor:</label>
                    <input type="text" id="valor" name="valor" value="<?php echo $row['valor']?>">
                </div>
                <br>
                <div class="form-item">
                    <label for="historico">Histórico:</label>
                    <input type="text" id="historico" name="historico" value="<?php echo $row['historico']?>">
                </div>
                <br>
                <div class="form-item">
                    <label for="cheque">Cheque:</label>
                    <select name="cheque">
                    <option value="<?php echo $row['cheque']?>" >Não</option>
                    <option value="<?php echo $row['cheque']?>" >Sim</option>
                    </select>
                </div>
                <div class="form-item">
                    <input id="btn" type="submit" value="Enviar" >
                    <a href='index.php'> Voltar</a>
                </div>
                <input name="id_fluxo_caixa" type="hidden" value="<?php echo $row['id_fluxo_caixa']?>">
            </fieldset>
        </form>
    </div>
</body>
</html>