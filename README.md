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