CREATE DATABASE sistema_simples_m1; -- cria o banco de dados da aplicação
-- 

-- seleciona o banco de dados criado para ser utilizado nas operações seguintes
USE sistema_simples_m1;

-- cria a tabela de usuários com os campos necessários
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY, -- id unico para cada usuário, gerado automaticamente pelo banco de dados e definido como chave primária
    usuario VARCHAR(87) NOT NULL, -- campo para armazenar o nome de usuário, do tipo VARCHAR com um limite de 87 caracteres e definido como NOT NULL para garantir que não seja deixado em branco
    senha VARCHAR(255) NOT NULL -- campo para armazenar a senha do usuário, do tipo VARCHAR com um limite de 255 caracteres e definido como NOT NULL para garantir que não seja deixado em branco
);

-- insere um usuário padrão na tabela de usuários para permitir o acesso inicial ao sistema
INSERT INTO usuarios (usuario, senha) VALUES ('admin','123');