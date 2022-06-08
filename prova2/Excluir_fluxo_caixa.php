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
<a href='listar_fluxo_caixa.php'> Voltar</a>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body{
			background-color: FireBrick;
			color: white;
		}
		a {
			color: white;
		}
	</style>
</head>
<body>
	
</body>
</html>