<h4>Usuários Cadastrados</h4>

// tabela com borda e espaçamento interno para exibir os usuários cadastrados no banco de dados
<table border="1" cellpadding="3">

    // cabeçalho da tabela com as colunas ID, Usuário e Senha
    <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Senha</th>
    </tr>

    <?php
    // consulta SQL para selecionar todos os usuários da tabela "usuarios"
    $sqlTodosUsuarios = "SELECT * FROM usuarios";

    // executa a consulta e armazena o resultado em $resultadoTodosUsuarios
    $resultadoTodosUsuarios = $conn->query($sqlTodosUsuarios);

    // loop para percorrer cada linha do resultado da consulta e exibir os dados na tabela
    while($linha = $resultadoTodosUsuarios->fetch_assoc()){

    // o fetch_assoc() retorna um array associativo com os dados da linha atual, e os valores são acessados usando os nomes das colunas (id, usuario, senha)

        // exibe os dados de cada usuário em uma nova linha da tabela
        echo "  <tr>
                    <td>". $linha['id'] . "</td>
                    <td>". $linha['usuario'] . "</td>
                    <td>". $linha['senha'] . "</td>
                </tr>
        ";

    }
    
    ?>

    


</table>