<?php

    session_start();
     // Inicia a sessão para ter acesso aos dados armazenados nela
    session_destroy();
     // Remove todos os dados da sessão atual
    header("Location: ../index.php");
     // Redireciona o usuário para a página de login
    exit();
    // Encerra a execução do script para garantir que nada mais seja executado

?>