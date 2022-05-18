<?php

   include('conexao.php');
   $nome = $_POST['nome'];
   echo '<p>Nome do Usuário: '.$nome;

   $apelido = $_POST['apelido'];
   echo '<p>Apelido: '.$apelido;

   $endereco = $_POST['endereco'];
   echo '<p>Endereço: '.$endereco;

   $bairro = $_POST['bairro'];
   echo '<p>Bairro: '.$bairro;

   $cidade = $_POST['cidade'];
   echo '<p>Cidade: '.$cidade;
   
   $estado = $_POST['estado'];
   echo '<p>Estado: '.$estado;

   $telefone = $_POST['telefone'];
   echo '<p>Telefone: '.$telefone;

   $celular = $_POST['celular'];
   echo '<p>Celular: '.$celular;

   $email= $_POST['email'];
   echo '<p>E-mail: '.$email;

   $sql = " INSERT INTO agenda (nome, apelido, endereco, bairro, cidade, estado, telefone, celular, email)
    VALUES ('".$nome. "','".$apelido."','".$endereco."','".$bairro."','".$cidade."','".$estado."','".$telefone."','".$celular."','".$email."')";
     echo'<br>';
     echo'<br>';
    $result = mysqli_query($con, $sql);
    if($result)
      echo 'Dados inseridos com sucesso';
    else
    echo 'Erro ao inserir no banco de dados: '.mysqli_error($con);
    
        

?>