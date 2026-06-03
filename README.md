# Sistema de Login Simples
Aplicação web simples de autenticação desenvolvida em PHP com banco de dados MySQL.

---
## Objetivo
Praticar o desenvolvimento de um sistema de login com cadastro de usuários, controle de sessões e integração com banco de dados.

---
## Tecnologias Utilizadas
- PHP
- MySQL / MySQLi

---
## Estrutura de Arquivos
```
projeto/
├── index.php              # Página de login
├── script.sql             # Script do banco de dados
├── public/
│   ├── home.php           # Página principal
│   ├── logout.php         # Encerra a sessão
│   └── components/
│       └── table.php      # Tabela de usuários
└── infra/db/
    └── connect.php        # Conexão com o banco
```

---
## Como Funciona
1. O usuário acessa `index.php` e faz login com usuário e senha
2. O sistema verifica as credenciais no banco de dados
3. Se válidas, uma sessão é iniciada e o usuário é redirecionado para `home.php`
4. Na home é possível cadastrar novos usuários e visualizar os existentes
5. O logout encerra a sessão e redireciona para o login

---
## Principais Aprendizados
- Como funcionam sessões em PHP (`session_start`, `$_SESSION`, `session_destroy`)
- Integração entre PHP e MySQL usando `mysqli`
- Organização de arquivos em um projeto web
- Reutilização de componentes com `include`
- Boas práticas de segurança: o projeto insere dados diretamente na query SQL, o que é vulnerável a SQL Injection, o correto seria usar prepared statements para evitar esse tipo de ataque
- SQL Injection: é quando um usuário mal-intencionado digita comandos SQL no lugar de um usuário/senha normal, enganando o banco de dados e ganhando acesso indevido ao sistema.

---
## Implementando Novas Funcionalidades
- Ideia: criar um campo para o usuário inserir o ID do usuário cadastrado que deseja remover junto com um botão de "Excluir". Depois de enviar, deve validar o ID, conectar-se ao banco de dados e excluir o usuário com aquele ID. No final deve aparecer uma mensagem avisando que a exclusão foi feita.
- Arquivos criados/alterados: home.php
- Dificuldades: não sabia como continuar com o PHP depois de fazer o input no home e o botão de excluir. Ainda não consegui entender muito bem SQL.
- Funcionalidade foi concluida? Não
