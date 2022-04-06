<?php
    $operacao = $_POST['tCaul'];
    $num1=$_POST['number1'];
    $num2=$_POST['number2'];
    
    
    switch ($operacao) {
        case '0':
            $tCaul = $num1 + $num2; 
            echo $tCaul;
            break;
        case '1':
            $tCaul = $num1 - $num2;
            echo $tCaul;
            break;
        case '2':
            $tCaul = $num1 / $num2;
            echo $tCaul;
            break;
        case '3':
            $tCaul = $num1 * $num2;
            echo $tCaul;
             break;
        default:
            
            break;
    }

    
?>