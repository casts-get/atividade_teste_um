<?php

include("infra/db/connect.php");
// Inclui o arquivo de conexão com o banco de dados


if($_SERVER["REQUEST_METHOD"] == "POST"){
 // Verifica se o formulário foi enviado utilizando o método POST


    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    // Recebe os dados digitados pelo usuário no formulário

    $sql = "SELECT * FROM usuario 
    WHERE usuario = '$usuario' 
    AND senha = '$senha'";
     // Consulta no banco de dados para verificar se existe
    // um usuário com o login e senha informados

    $resultado = $conn -> query($sql);
    // Executa a consulta

    if($resultado -> num_rows > 0){
        // Verifica se encontrou algum registro

        $_SESSION["usuario"] = $usuario;
         // Armazena o usuário na sessão
        header("Location: public/home.php");
        // Redireciona para a página inicial
        exit();
    }else{
        $erro = "Usuário ou senha inválidos.";
          // Mensagem de erro caso login ou senha estejam incorretos
    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login com PHP</title>
</head>
<body>
     <?php
    include("public/component/navbar.php");
     // Inclui a barra de navegação
    ?>
    <h2>Login com PHP</h2><form method="POST">
         <!-- Formulário de login -->
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario">
        <!-- Campo para digitar o usuário -->
        <br>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha">
        <br>
        <br>
        <?php

            if(isset($erro)){
                // Exibe a mensagem de erro caso ela exista
                echo $erro;
            }
        ?>
        <button type="submit">Entrar</button>
          <!-- Botão para enviar o formulário -->
    </form>
    


    
</body>
</html>