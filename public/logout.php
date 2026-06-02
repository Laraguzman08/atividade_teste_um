<?php

    // inicia a sessão para ter acesso ás variáveis armazenadas na sessão, como o ID do usuário logado
    session_start();
    // a função session_destroy() é usada para destruir a sessão atual, removendo todas as variáveis de sessão e encerrando a sessão do usuário. 
    session_destroy();
    // isso é útil para garantir que o usuário seja completamente desconectado do sistema, removendo quaisquer informações de sessão que possam ser usadas para identificar o usuário ou manter sua sessão ativa.
    // após destruir a sessão, a função header() é usada para redirecionar o usuário para a página de login (index.php) usando o método HTTP Location.
    header("Location: ../index.php");
    exit();

?>