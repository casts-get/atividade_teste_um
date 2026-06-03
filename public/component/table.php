<hr>
<!-- Linha horizontal para separar o conteúdo da página -->

<h4> Usuários Cadastrados</h4>

<table border="1" cellpadding="2">
<!-- Tabela que exibirá os usuários cadastrados -->
    <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Senha</th>
        <th> Ações</th>
    </tr>
    <!-- Cabeçalho da tabela -->

    <?php
    

    $sqlUsuario = "SELECT * FROM usuario";
     // Consulta SQL para buscar todos os usuários da tabela "usuario"

    $resultadoUsuarios = $conn -> query($sqlUsuario);
     // Executa a consulta no banco de dados


    while($linha = $resultadoUsuarios->fetch_assoc()){
        // Percorre todos os registros retornados pela consulta
        echo "<tr>
        
            <td>" . $linha["id"] . "</td>
            <td>" . $linha["usuario"] . "</td>
            <td>" . $linha["senha"] . "</td>

            <td>
            <a href='excluir.php?id=" . $linha["id"] . "'
            onclick='return confirm(\"Deseja realmente excluir este usuário?\")'>
            Excluir
            </a>
            </td>

        
        </tr>";
         // Cria uma linha da tabela para cada usuário encontrado
    }
    
    ?>

</table>