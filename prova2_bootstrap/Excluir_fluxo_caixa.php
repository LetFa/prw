<?php
    include('conexao.php');
    
	$id_fluxo_caixa = $_GET['id_fluxo_caixa'];

    $sql = 'DELETE FROM fluxo_caixa WHERE id_fluxo_caixa='.$id_fluxo_caixa;
    
	echo "<h1> Exclusão de Usuário </h1>";
	$result = mysqli_query($con, $sql);
	
	if($result)
		echo "Registro excluído com sucesso<br>";
	else
		echo "Erro ao tentar excluir usuário: ".mysqli_error($con)."<br>";
  
?>
<br>
  <button type="button" class="btn btn-outline-danger"><a class="btn" href='listar_fluxo_caixa.php'> Voltar</a></button>
  

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Excluir</title>
	 <link rel="stylesheet" href="css/bootstrap.css">
	 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<style>
		.btn {
			color: red;
			padding: 1px;
			margin-left: 4px;
		}
		.btn:hover {
			color: white;
		}
	</style>
</head>
<body>

</body>
</html>