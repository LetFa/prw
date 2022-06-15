<?php 

    include ('conexao.php');
    $sql = 'SELECT * FROM fluxo_caixa';

    //retorna todos os dados da consulta
    $result = mysqli_query($con, $sql);

    //retorna a primeira linha
    //$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Fluxo de Caixa</title>
    <link rel="stylesheet" href="css/listar.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <h1 align="center">Listagem de Fluxo de Caixa</h1><br>
    <table class="table" align="center" border="1" width="700">
        <!-- tr>th*4 -->
        <thead class="thead-dark">
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Data</th>
            <th scope="col">Tipo</th>
            <th scope="col">Valor</th>
            <th scope="col">historico</th>
            <th scope="col">Cheque</th>
            <th scope="col">Excluir</th>
        </tr>
        </thead>
    </div>  
        
      

        <?php 
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" .$row['id_fluxo_caixa']. "</td>";
                echo "<td><a href='altera_fluxo_caixa.php?id_fluxo_caixa=".$row['id_fluxo_caixa']."'>" .$row['data']. "</a></td>";
                echo "<td>" .$row['tipo']. "</td>";
                echo "<td>" .$row['valor']. "</td>";
                echo "<td>" .$row['historico']. "</td>";
                echo "<td>" .$row['cheque']. "</td>";
                echo "<td><a href='excluir_fluxo_caixa.php?id_fluxo_caixa=".$row['id_fluxo_caixa']."'>Excluir</a></td>";
                echo "</tr>";
            }
        ?>

    </table>

</body>
</html>