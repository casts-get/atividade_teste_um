<?php

    // Inclui o arquivo de conexão com o banco de dados
    include("../infra/db/connect.php");

    // Verifica se existe um usuário logado na sessão
    if(!isset($_SESSION["usuario"])){
        
        // Se não estiver logado, redireciona para a página de login
        header("Location: ../index.php");
        exit();
    }

    // Verifica se o formulário foi enviado
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        // Recebe os dados digitados no formulário
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

        // Comando SQL para inserir um novo usuário na tabela
        $sql = "INSERT INTO users (username, password) VALUES ('$usuario','$senha')";

        // Executa a consulta e verifica se foi realizada com sucesso
        if($conn->query($sql) === TRUE){

            // Exibe mensagem de sucesso
            echo "<script>alert('Usuário Cadastrado com sucesso!')</script>";

        }else{

            // Exibe mensagem de erro
            echo "<script>alert('Erro Usuário Não Cadastrado!')</script>";
        }
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">

    <!-- Faz o site se adaptar a diferentes tamanhos de tela -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home</title>

    <!-- Importa o arquivo CSS -->
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>

    <?php
        // Inclui a barra de navegação
        include("../public/component/navbar.php");
    ?>

    <h2>Bem-vindo!</h2>

    <p>
        Usuário logado:

        <?php
            // Exibe o nome do usuário armazenado na sessão
            echo $_SESSION["usuario"];
        ?>
    </p>

    <h4>Cadastrar Novo Usuário</h4>

    <!-- Formulário para cadastro de novos usuários -->
    <form method="POST">

        <!-- Campo para informar o nome de usuário -->
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario">

        <br>
        <br>

        <!-- Campo para informar a senha -->
        <label for="senha">Senha:</label>
        <input type="password" name="senha">

        <br>
        <br>

        <!-- Botão para enviar o cadastro -->
        <button type="submit">Cadastrar</button>

    </form>

    <?php
    
    // Inclui a tabela que exibe os usuários cadastrados
    include("../public/component/table.php");

    ?>

    <!-- Link para encerrar a sessão -->
    <a href="logout.php">Sair</a>
    
</body>
</html>