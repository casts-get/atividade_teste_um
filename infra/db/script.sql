CREATE DATABASE sistema_simples;
-- Cria o banco de dados chamado sistema_simples

USE sistema_simples;
-- Seleciona o banco de dados para uso


CREATE TABLE usuario (
    -- Cria a tabela de usuários
    id INT AUTO_INCREMENT PRIMARY KEY,
     -- Campo ID com incremento automático e chave primária
    usuario VARCHAR(255) NOT NULL,
     -- Campo para armazenar o nome de usuário
    senha VARCHAR(255) NOT NULL
     -- Campo para armazenar a senha

);

INSERT INTO usuario (usuario, senha) VALUE ('admin','123');
-- Insere um usuário administrador padrão na tabela