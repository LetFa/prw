<?php
   $nome = $_POST['text1'];
   echo 'Olá, '.$nome;
   $mensagem = $_POST['tMsg'];
   echo '</br>Mensagem: '.$mensagem;

   $menu = readfile('menu.html');
   

?>