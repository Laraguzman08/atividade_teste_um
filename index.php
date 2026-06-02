<?php
    // inicia a sessão para armazenar informações do usuário logado
    session_start();

    // inclui o arquivo de conexão com o banco de dados
    include("infra/db/connect.php");

    // verifica se o formulário de login foi enviado com o método POST
    if($_SERVER['REQUEST_METHOD'] == "POST"){

        // captura os dados do formulário de login (usuário e senha)
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        
        // consulta SQL para verificar se o usuário e senha correspondem a um registro na tabela "usuarios"
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";

        // executa a consulta SQL e armazena o resultado em uma variável
        $resultado = $conn->query($sql);

        // verifica se encontrou algum usuário na tabela com os dados informados
        if ($resultado->num_rows > 0){
            // se encontrou um usuário, armazena as informações do usuário na sessão e redireciona para a página "home.php"
            $_SESSION["usuario"] = $usuario;
            header("Location: public/home.php");
            exit();
        }else{
            // se não encontrou um usuário, define uma mensagem de erro para ser exibida na página de login
            $erro = "Usuário ou senha inválidos!";
        }
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Sistema de Login Simples</h1>

    // formulário de login que envia os dados para o mesmo arquivo (index.php) usando o método POST
    <form method="POST">
        <label>Usuário:</label>
        <input type="text" name="usuario">
        <br>
        <label>Senha:</label>
        <input type="password" name="senha">
        <br>
        <?php
            // verifica se a variável de erro foi definida e exibe a mensagem de erro, se houver
            if(isset($erro)){
                echo $erro;
            };
        
        ?>
        <br>
        <button type="submit">Entrar</button>
    </form>

</body>
</html>