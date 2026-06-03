<?php
// inicia a sessão para armazenar as informações do usuário logado
session_start();
// verifica se o usuário está logado, caso contrário, redireciona para a página de login
if(!isset($_SESSION["usuario"])){
    header("Location: ../index.php");
    exit();
}

// inclui o arquivo de conexão com o banco de dados
include("../infra/db/connect.php");

// verifica se o formulário de cadastro de novo usuário foi enviado com o método POST
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // captura os dados do formulário de cadastro de novo usuário (usuário e senha)
    $novoUsuario = $_POST['usuario'];
    $novaSenha = $_POST['senha'];

    // consulta SQL para inserir um novo usuário na tabela "usuarios"
    $sql = "INSERT INTO usuarios (usuario,senha) 
    VALUES ('$novoUsuario','$novaSenha')";  

    // executa a consulta SQL e verifica se o cadastro foi realizado com sucesso
    if($conn->query($sql) === TRUE){
        // se o cadastro foi realizado com sucesso, exibe uma mensagem de sucesso
        echo "<script> alert('Usuário cadastrado com sucesso!')</script>";
    }else{
        // se houve um erro ao realizar o cadastro, exibe uma mensagem de erro
        echo "<script> alert('Erro ao cadastrar')</script>";
    }

};

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h3>Bem-Vindo! <?php echo $_SESSION["usuario"]; ?></h3>
    <!-- link para a página de logout, que encerra a sessão do usuário  -->
    <a href="logout.php"> Sair</a>

    <hr>
    <h4>Cadastro de Novo Usuário.</h4>
    <!-- formulário de cadastro de novo usuário que envia os dados para o mesmo arquivo (home.php) usando o método POST -->
    <form method="POST">
        <label>Usuário:</label>
        <input type="text" name="usuario">
        <br><br>
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
        <button type="submit">Cadastrar</button>
    </form>
    <hr>
    <?php
    
    // inclui o arquivo "table.php", que exibe uma tabela com os usuários cadastrados no banco de dados
    include("components/table.php")

    ?>

    <?php

    $sql = "DELETE FROM usuarios WHERE id = $id";

    

    ?>

    <hr>
    <h4>Exclusão de Usuário</h4>
    <form>
        <input type="text" id="excluir" placeholder="Insira o ID">
        <button type="submit"> Excluir </button>
    </form>


</body>
</html>