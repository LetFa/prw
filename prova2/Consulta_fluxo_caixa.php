<?php
    include('conexao.php');
   

    $tipo = $_POST['tipo'];
  
   if($tipo == 'entrada') {
      $sql="select sum(valor) valor from fluxo_caixa where tipo 'entrada'";
   }else if($tipo == 'saida') {
     $sql="select sum(valor) valor from fluxo_caixa where tipo 'saida'";
   }else if($tipo == 'saldo'){
    $sql="select sum(case when tipo = 'entrada' then valor else 0 end) - 
    sum(case when tipo = 'saida' then valor else 0 end) as valor from fluxo_caixa ";
   }

      
    echo "<h1> Alteração de dados </h1>";
    echo "<p> Tipo de Saldo: " . $tipo . "<p>";  
  
          $result = mysqli_query($con, $sql);
          if($result)
            echo "Dados alterados com sucesso <br>";
          else
            echo "Erro ao alterar no banco de dados: ".mysqli_error($con)."<br>";  
?>
        <a href='index.php'> Voltar</a>
