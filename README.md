# DevNexus PHP 🚢

Projeto desenvolvido com **PHP** e **MySQL** no backend, utilizando **HTML** e **CSS** para marcação e estilização da interface.  
O sistema foi pensado para exibir os **navios da companhia Royal Caribbean**, organizados em **cards dinâmicos** gerados via PHP, onde os dados são carregados diretamente do banco de dados `db_royal`, que contém **29 navios cadastrados**.

---

## 🎯 Intuito do Trabalho

O projeto foi criado com o objetivo de:
- Consolidar o aprendizado em **desenvolvimento web full stack** (PHP + MySQL + HTML + CSS).
- Explorar o uso de **banco de dados relacional** para gerenciamento de informações.
- Criar uma aplicação prática com **design estruturado** e exibição de dados reais.
- Simular uma plataforma que pudesse ser utilizada em **catálogos de navios da Royal Caribbean**.

---

## 💡 Motivo da Criação

A proposta do projeto surgiu a partir da necessidade de **organizar e apresentar os navios** da frota da Royal Caribbean em formato acessível, dinâmico e escalável.  
O sistema funciona como um catálogo online, onde cada navio possui um card exibindo suas principais informações e características técnicas.

---

## 🛠️ Tecnologias Utilizadas

- **PHP 8.2** → linguagem principal do backend.  
- **MySQL/MariaDB 10.4** → banco de dados relacional com 29 navios cadastrados.  
- **HTML5** → estrutura e marcação da página.  
- **CSS3** → estilização e identidade visual.  

---

## 📋 Pré-requisitos

Antes de executar o projeto, certifique-se de ter instalado:

- [XAMPP](https://www.apachefriends.org/) ou [WAMP](https://www.wampserver.com/) (para rodar PHP e MySQL).  
- **PHP 7.4+ ou 8+** - **MySQL/MariaDB 5.7+** - Navegador atualizado (Chrome, Edge, Firefox...).  
- Editor de código (VS Code, PHPStorm ou outro).  

---

## ⚙️ Estrutura do Projeto
```
/
├── ASSETS/         # Contém todas as fotos dos navios
├── CSS /            # Pasta com os arquivos de estilo
│   ├── detalhes.css
│   └── index.css
├── PHP /            # Pasta com os arquivos de backend
│   └── conexao.php
├── detalhes.php    # Página de detalhes de um navio
├── index.php       # Página inicial com listagem dos navios
├── navios(3).sql   # Script SQL contendo os 29 navios
└── README.md       # Documentação do projeto

```
---

## 📂 Banco de Dados

- Nome do banco: `db_royal` (sugerido, pode ser alterado)
- Tabela: `navios`  
- Total de registros: **29 navios**

### Estrutura da Tabela

```sql
CREATE TABLE `navios` (
  `codigo_navio` CHAR(3) NOT NULL,
  `nome_navio` VARCHAR(100) NOT NULL,
  `descricao` TEXT DEFAULT NULL,
  `ano_construcao` INT DEFAULT NULL,
  `cabine_acessivel` TEXT DEFAULT NULL,
  `largura` FLOAT DEFAULT NULL,
  `comprimento` FLOAT DEFAULT NULL,
  `toneladas` FLOAT DEFAULT NULL,
  `velocidade_navegacao` FLOAT DEFAULT NULL,
  `num_passageiros` INT DEFAULT NULL,
  `num_tripulantes` INT DEFAULT NULL,
  `num_decks` INT DEFAULT NULL,
  `num_cabines` INT(4) DEFAULT NULL,
  `idiomas_abordo` VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (`codigo_navio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```
---
## ▶️ Como Executar
Clone o repositório:
```
git clone [https://github.com/seu-usuario/devnexus_php.git](https://github.com/seu-usuario/devnexus_php.git)
```
---
## Importe o banco de dados Navios(3).sql no seu MySQL:
```
CREATE DATABASE db_royal;
USE db_royal;
SOURCE /caminho/completo/para/o/arquivo/Navios(3).sql;
```
Observação: Substitua /caminho/completo/para/o/arquivo/ pelo caminho onde o arquivo .sql está no seu computador.`
---
## Configure o arquivo php/conexao.php com os dados do seu ambiente:
```
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_royal";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>
```
 ## Coloque a pasta do projeto dentro do diretório do seu servidor web (ex: htdocs no XAMPP).

Inicie o servidor Apache e MySQL pelo seu painel de controle (XAMPP/WAMP).
Acesse no navegador:

http://localhost/nome-da-pasta-do-projeto/
----
