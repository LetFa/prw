<?php
    $nome = $_POST['nome'];
    echo 'Nome: '.$nome;

    $telefone = $_POST['telefone'];
    echo '<p>Telefone: '.$telefone;

    $email = $_POST['email'];
    echo '<p>E-mail: '.$email;

    $devWeb = $_POST['devWeb'];
    echo '<p>Area de Aplicação em: '.$devWeb;

    $senioridade = $_POST['tsenioridade'];
    echo '<p>Senioridade: '.$senioridade;
   
    $tecnologia = $_POST['Ttecnologia'];
    echo '<p>Tecnologia que utiliza: '.$tecnologia;

    $mensagem = $_POST['mensagem'];
    echo "<p>sua experiência: ".$mensagem;
?>