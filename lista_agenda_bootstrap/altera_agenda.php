<?php
   require __DIR__. /'conexao.php';
   $id_agenda = $_GET['id_agenda'];
   $sql = 'SELECT * FROM agenda where id_agenda='.$id_agenda;
   $result = mysqli_query($con, $sql);
   $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container col-6">
    <h1>Cadastro de Clientes  - IFSP</h1>
    <?php echo "<img class='center' src='data:image/jpeg;base64,".base64_encode( $row["foto_blob"] )."' align='center' width='150' height='150'/>"; ?>  
    <div id="teste">
        <form method="post" action="altera_agenda_exe.php" enctype='multipart/form-data'>
        <br>    
        <div class="form-row">
            <div class="form-group col-md-6">
              <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $row['nome']?>" placeholder="Nome Completo">
            </div>
            <div class="form-group col-md-6">
              <input type="text" class="form-control" name="apelido" id="apelido" value="<?php echo $row['apelido']?>" placeholder="Apelido">
            </div>
        </div>
          <div class="form-group">
            <label for="enderco">Endereço:</label>
            <input type="text" class="form-control" name="endereco" id="endereco" value="<?php echo $row['endereco']?>" placeholder="Rua dos Bobos, nº 0">
          </div>
          <div class="form-group">
            <label for="bairro">Bairro:</label>
            <input type="text" class="form-control" name="bairro" id="bairro" value="<?php echo $row['bairro']?>" placeholder="Bairro">
          </div>
          
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="cidade">Cidade:</label>
              <input type="text" class="form-control" name="cidade" id="cidade" value="<?php echo $row['cidade']?>">
            </div>
            <div class="form-group col-md-4">
              <label>Estado:</label>
              <select class="form-control" name="estado" id="estado"  >
                <option selected>Escolher...</option>
                <option value="<?php echo $row['estado']?>">AC</option>
                <option value="<?php echo $row['estado']?>">AL</option>
                <option value="<?php echo $row['estado']?>">AP</option>
                <option value="<?php echo $row['estado']?>">AM</option>
                <option value="<?php echo $row['estado']?>">BA</option>
                <option value="<?php echo $row['estado']?>">CE</option>
                <option value="<?php echo $row['estado']?>">DF</option>
                <option value="<?php echo $row['estado']?>">ES</option>
                <option value="<?php echo $row['estado']?>">GO</option>
                <option value="<?php echo $row['estado']?>">MA</option>
                <option value="<?php echo $row['estado']?>">MT</option>
                <option value="<?php echo $row['estado']?>">MS</option>
                <option value="<?php echo $row['estado']?>">MG</option>
                <option value="<?php echo $row['estado']?>">PA</option>
                <option value="<?php echo $row['estado']?>">PB</option>
                <option value="<?php echo $row['estado']?>">PR</option>
                <option value="<?php echo $row['estado']?>">PE</option>
                <option value="<?php echo $row['estado']?>">PI</option>
                <option value="<?php echo $row['estado']?>">RJ</option>
                <option value="<?php echo $row['estado']?>">RN</option>
                <option value="<?php echo $row['estado']?>">RS</option>
                <option value="<?php echo $row['estado']?>">RO</option>
                <option value="<?php echo $row['estado']?>">RR</option>
                <option value="<?php echo $row['estado']?>">SP</option>
              </select>
            </div>
           <br>

           <div class="form-group col-md-2">
            <label for="telefone">Telefone:</label>
            <input type="text" class="form-control" name="telefone" id="telefone" value="<?php echo $row['telefone']?>">
          </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="celular">Celular:</label>
              <input type="text" class="form-control" name="celular" id="celular" value="<?php echo $row['celular']?>">
            </div>
            <div class="form-group col-md-6">
            <label for="email">E-mail:</label>
              <input type="email" class="form-control" name="email" id="email" value="<?php echo $row['email']?>">
            </div>
          </div>
         <br>

        <div class="form-item">
            <input type="file" id="foto" name="foto" accept="image/*" />
        </div>  
        <br>
        <div class="form-item">
            <input class="btn btn-info" id="btn" type="submit" value="Enviar" >
             <a class="btn btn-dark" href='index.php'> Voltar</a>
        </div>
            <input name="id_agenda" type="hidden" value="<?php echo $row['id_agenda']?>">
        </form>
    </div>
    <br>
    <br>
</body>
</html>