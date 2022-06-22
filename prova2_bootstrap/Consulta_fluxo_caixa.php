<?php
    include ('conexao.php');   

    $tipo = $_POST['tipo'];
  
   if($tipo == 'entrada') {
      $sql="select sum(valor) valor from fluxo_caixa where tipo = 'entrada'";
   }else if($tipo == 'saida') {
     $sql="select sum(valor) valor from fluxo_caixa where tipo = 'saida'";
   }else if($tipo == 'saldo'){
    $sql="select sum(case when tipo = 'entrada' then valor else 0 end) - 
    sum(case when tipo = 'saida' then valor else 0 end) as valor from fluxo_caixa ";
   }      
   echo "<h1> Alteração de dados </h1>";
   echo "<p> Tipo de Saldo: " . $tipo . "<p>";  
  
   $result = mysqli_query($con, $sql);
   $row = mysqli_fetch_array($result);
   echo $row['valor']."<br>";
   
?>
  <button type="button" class="btn btn-outline-success"><a class="btn" href='index.php'> Voltar</a></button>
  
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
			color: green;
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