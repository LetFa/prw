<?php 

    include ('conexao.php');
    $sql = 'SELECT * FROM agenda';

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
    <title>Listagem da Agenda</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</head>
<body>
     
    <h1 align="center">Listagem da Agenda</h1><br>
    <table class="table table-dark" align="center" border="1">
        <!-- tr>th*4 -->
        <thead>
          <tr>
            <th scope="col">Código</th>
            <th scope="col">Foto</th>
            <th scope="col">Nome</th>
            <th scope="col">Apelido</th>
            <th scope="col">Endereço</th>
            <th scope="col">Bairro</th>
            <th scope="col">Cidade</th>
            <th scope="col">Estado</th>
            <th scope="col">Telefone</th>
            <th scope="col">Celular</th>
            <th scope="col">E-mail</th>
            <th scope="col"></th>
          </tr>
       </thead>
 

        <?php 
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" .$row['id_agenda']. "</td>";
                echo "<td><img src='data:image/jpeg;base64,".base64_encode( $row["foto_blob"] )."' width='150' height='150'/></td>";
                echo "<td>" .$row['nome']. "</td>";
                echo "<td>" .$row['apelido']. "</td>";
                echo "<td>" .$row['endereco']. "</td>";
                echo "<td>" .$row['bairro']. "</td>";
                echo "<td>" .$row['cidade']. "</td>";
                echo "<td>" .$row['estado']. "</td>";
                echo "<td>" .$row['telefone']. "</td>";
                echo "<td>" .$row['celular']. "</td>";
                echo "<td>" .$row['email']. "</td>";
                echo "<td><a class='btn btn-info' href='altera_agenda.php?id_agenda=".$row['id_agenda']."'>Editar</a></td>";
                echo "<td><a class='btn btn-danger' href='excluir_agenda.php?id_agenda=".$row['id_agenda']."'>Excluir</a></td>";
                echo "</tr>";
            }
        ?>

    </table>

</body>
</html>