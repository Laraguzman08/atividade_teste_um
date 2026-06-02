<?php

    // configurações de conexão com o banco de dados
    $host = "localhost"; // endereço do servidor de banco de dados
    $user = "root"; // nome de usuário do banco de dados
    $pass = "root"; // senha do banco de dados
    $db = "sistema_simples_m1"; // nome do banco de dados a ser utilizado

    // cria uma nova conexão com o banco de dados usando as configurações definidas acima e a classe mysqli
    $conn = new mysqli($host,$user,$pass,$db);

    // verifica se houve um erro na conexão, e se sim, exibe uma mensagem de erro e encerra o script. Caso contrário, exibe uma mensagem de sucesso no console do navegador.
    if($conn->connect_error){
        die("Erro na conexão!");
    }else{
        // a função echo é usada para enviar um script JavaScript para o navegador, que exibe uma mensagem no console do navegador indicando que a conexão com o banco de dados foi bem-sucedida.
        echo "<script>console.log('Banco conectado com sucesso!')</script>";
        // é recomendado remover ou comentar esta linha em um ambiente de produção para evitar a exposição de informações sensíveis no console do navegador que possam facilitar ataques ao sistema.
    };

?>