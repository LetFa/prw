<?php
    require __DIR__. /'conexao.php';
    
	$id_agenda = $_GET['id_agenda'];

    $sql = 'DELETE FROM agenda WHERE id_agenda='.$id_agenda;
    

	$result = mysqli_query($con, $sql);
	
	$messagem = $result ? "Registro excluído com sucesso<br>" : "Erro ao tentar excluir usuário: ".mysqli_error($con)."<br>";

  
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
	  <h1>Exclusão de Usuário</h1>
	  <?= $messagem?>
	  <br>
      <a class="btn btn-danger" href='listar_agenda.php'> Voltar</a>
	 </div>
</body>
</html>