<?php
   $peso= $_POST['peso1'];
   $altura = $_POST['altura2'];


   $imc = $peso / ($altura * $altura);

   if($peso < 17){
      echo 'Muito abaixo do peso';
   }else if($peso > 18 && $peso <= 24){
      echo 'Peso normal';

   }else if($peso > 25 && $peso < 29){
      echo 'Acima do peso';
   }else if($peso > 30 && $peso < 34){
      echo 'Obesidade I';
   }else if($peso > 35 && $peso < 39){
      echo 'Obesidade II (severa)';
   }else if($peso > 40){
     echo  'Obesidade III (mórbida)';
   }





?>