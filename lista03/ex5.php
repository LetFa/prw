<?php
    $data= strtotime("04/06/2022"); // data padrão  mes/dia/ano
       
    $diainteiro = date("w", $data);
    echo $diainteiro.'<br>';
    
    switch($diainteiro) {    
        case 0: $dia_semana = "domingo"; break;        
        case 1: $dia_semana = "segunda"; break;        
        case 2: $dia_semana = "terca"; break;        
        case 3: $dia_semana = "quarta"; break;        
        case 4: $dia_semana = "quinta"; break;        
        case 5: $dia_semana = "sexta"; break;        
        case 6: $dia_semana = "sabado"; break;
    }
    echo $dia_semana;
?>