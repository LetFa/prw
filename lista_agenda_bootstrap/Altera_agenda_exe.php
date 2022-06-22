<?php
 
 include ('conexao.php');

// Upload da foto     
$fotoNome = $_FILES['foto']['name'];
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
// Select file type
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Valid file extensions
$extensions_arr = array("jpg","jpeg","png","gif");
$dt_cadastro = date("Y-m-d");
// Check extension
if( in_array($imageFileType,$extensions_arr) ){      
    // Upload file
    if(move_uploaded_file($_FILES['foto']['tmp_name'],$target_dir.$fotoNome)){
        $fotoBlob = addslashes(file_get_contents($target_dir.$fotoNome));
    }
}

    $id_agenda = $_POST['id_agenda'];
    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
          
	
    if(isset($fotoNome)){
  	$sql = "UPDATE agenda SET
            nome='".$nome."',
            apelido='".$apelido."',
            endereco='".$endereco."',
            bairro='".$bairro."',
            cidade='".$cidade."',
            estado='".$estado."',
            telefone='".$telefone."',
            celular='".$celular."',
            email='".$email."',
            foto_blob='".$fotoBlob."',
            foto_nome='".$fotoNome."'
          WHERE id_agenda=".$id_agenda;            
          }
          else
          {
            $sql = "UPDATE agenda SET
                      nome='".$nome."',
                      apelido='".$apelido."',
                      endereco='".$endereco."',
                      bairro='".$bairro."',
                      cidade='".$cidade."',
                      estado='".$estado."',
                      telefone='".$telefone."',
                      celular='".$celular."',
                      email='".$email."'
                     WHERE id_agenda=".$id_agenda;
          }
	    
          $result = mysqli_query($con, $sql);
          $menssage = $result ? "Dados alterados com sucesso<br>" : "Erro ao alterar no banco de dados: ".mysqli_error($con)."<br>";
?>
<br>
       


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
     <div class="container"> 
      <hr>
      <h1>Alteração de dados </h1> 
      <?= $menssage ?>
      <br>
      <button type="button" class="btn btn-outline-dark"><a class="btn" href='listar_agenda.php'> Voltar</a></button>
      </div>
     
</body>
</html>