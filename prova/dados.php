<?php
   $nome = $_POST['nome1'];
   echo 'Nome do usuário: '.$nome;

   $estado = $_POST['tEstado'];
   echo '</br>Estado: '.$estado;

   $cpf = $_POST['cpf1'];
   echo '</br>CPF: '.$cpf;
   
   $Rg = $_POST['Rg1'];
   echo '</br>RG: '.$Rg;

   $sexo = $_POST['tSexo'];
   echo '</br>Sexo: '.$sexo;

   $saldo = $_POST['saldo1'];
   $total = $_POST['total1'];
   
   $soma = $saldo + $total;
   echo '</br>Total da compra: R$'.$soma;

   if($saldo < $total){
      echo "</br><p style='color:red'>Saldo Insuficiente para Concluir Compra!</p>";
   }
?>