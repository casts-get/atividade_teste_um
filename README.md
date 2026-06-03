## SISTEMA SIMPLES DE LOGIN E PHP

## Objetivo da aplicação:
O objetivo deste projeto é demonstrar a criação de um sistema básico de autenticação utilizando php e MySQL. A aplicação permite que usuários realizem login, acessem uma área protegida, cadastrem novos usuários, visualizem os usuários cadastrados e realizem logout do sistema.

## Tecnologias utilizadas:
* PHP
* MySQL
* HTML
* Sessões PHP
* SQL
* CSS

## Estrutura básica dos arquivos:

index.php: página inicial do sistema, responsável pelo login dos usuários.
infra/db/connect.php: arquivo responsável por iniciar a sessão e realizar a conexão com o banco de dados MySQL.
public/home.php: página principal do sistema, acessível apenas para usuários autenticados.
public/logout.php: encerra a sessão do usuário e redireciona para a tela de login.
public/component/navbar.php: componente reutilizável que contém o cabeçalho da aplicação.
public/component/table.php: componente responsável por listar os usuários cadastrados em uma tabela.
style/style.css: arquivo de estilização da interface do sistema.
Banco de dados sistema_simples: banco responsável pelo armazenamento dos dados dos usuários.
Tabela usuario: tabela que contém os campos id, usuario e senha.

## Explicação geral sobre o funcionamento do código:

O sistema possui um mecanismo de autenticação de usuários desenvolvido em PHP e integrado a um banco de dados MySQL. Inicialmente, o usuário acessa a página de login, onde informa seu nome de usuário e senha. O sistema verifica essas informações no banco de dados e, caso estejam corretas, cria uma sessão para manter o usuário autenticado.

Após o login, o usuário é direcionado para a página principal, onde pode visualizar o usuário logado, cadastrar novos usuários e consultar a lista de usuários registrados no sistema.

O acesso à página principal é protegido por uma verificação de sessão. Caso não exista uma sessão ativa, o usuário é redirecionado automaticamente para a tela de login.

O sistema também possui uma funcionalidade de logout, que encerra a sessão do usuário e o redireciona para a página inicial.

Os dados dos usuários são armazenados em uma tabela chamada usuario, contendo os campos de identificação, nome de usuário e senha.

## Principais aprendizados obtidos durante a análise:
* Como criar e utilizar sessões em PHP.
* Como conectar uma aplicação PHP a um banco de dados MySQL.
* Como utilizar comandos SQL para criar bancos, tabelas e inserir registros.
* Como capturar dados enviados por formulários HTML utilizando o método POST.
* Como realizar consultas e inserções de dados no banco através do PHP.
* Como organizar um projeto utilizando componentes reutilizáveis.
* Como controlar acesso a páginas protegidas por meio de autenticação.
* Como exibir informações do banco de dados em tabelas HTML.
* A importância da segurança em sistemas de login, especialmente no armazenamento de senhas e na prevenção de SQL Injection.