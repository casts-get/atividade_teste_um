<?php
    session_start();
      // Inicia a sessão para permitir o uso de variáveis de sessão

    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "sistema_simples";
    // Dados necessários para conectar ao banco de dados
    
    $conn = new mysqli($host,$user,$pass,$db);
     // Cria a conexão com o banco utilizando a classe mysqli

    // if($conn->connect_error){
    //     die("Erro na conexão");
    // }else{
    //     echo ("<p> BD: ok </p>");
    // }
?>