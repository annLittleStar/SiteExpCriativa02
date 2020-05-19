-- CREATE SCHEMA IF NOT EXISTS `SEA`;
-- USE `SEA` ;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

SET @@global.time_zone = '+3:00';

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

/*alter user `root`@`localhost`;*/

SET @@global.time_zone = '+3:00';

create schema if not exists `SEA`;
use `SEA`;
--
-- Database: `SEA`
--

-- --------------------------------------------------------
-- TABELAS
-- --------------------------------------------------------
-- Tabela de funcionarios
-- --------------------------------------------------------

create table if not exists funcionario(
	id int not null auto_increment,
    nome varchar(30) not null,
    login varchar(30) not null,
    senha varchar(30) not null,  
    tipo enum('Dono', 'Funcionario') not null, 
    cpf varchar(15) not null unique,
    telefone varchar(20) not null unique,
	primary key(id)
) engine=innoDB default charset=utf8;

-- --------------------------------------------------------
-- Tabela de folha ponto
-- --------------------------------------------------------

create table if not exists folhaPonto(
	idFuncionario int not null,
    hrEntrada datetime not null,
    hrSaida datetime
    -- foreign key(idFuncionario) references funcionario(id)
) engine=innoDB default charset=utf8;

-- --------------------------------------------------------
-- Tabela de produtos
-- --------------------------------------------------------

create table if not exists produto(
	id int not null auto_increment,
    nome varchar(30) not null,
    marca varchar(30) not null,
    preco double not null,
    tipo enum('Pneu', 'Produto de limpeza') not null,
    quantidade int not null,
    idFunc int not null,
    primary key(id)
    -- foreign key(idFunc) references funcionario(id)
) engine=innoDB default charset=utf8;

-- --------------------------------------------------------
-- Tabela de Estado de produto
-- --------------------------------------------------------

create table if not exists estado(
	idProduto int not null,
    estado enum('Bom', 'Defeituoso') not null,
    quantidade int not null, -- Isso é para a contagem de quantos defeituosos tem
    foreign key(idProduto) references produto(id)
) engine=innoDB default charset=utf8;

-- --------------------------------------------------------
-- Tabela de Pneu Defeituoso
-- --------------------------------------------------------

create table if not exists pneuDef(
	idPneu int not null,
    qtdA int not null default(0), -- Isso é para a contagem de quantos defeituosos aguardam recolhimento
    qtdR int not null default(0), -- Isso é para a contagem de quantos defeituosos foram recolhidos
    qtdT int not null default(0), -- Isso é para a contagem de quantos defeituosos já passaram pela loja
    foreign key(idPneu) references produto(id) on delete no action on update no action
) engine=innoDB default charset=utf8;

-- --------------------------------------------------------
-- Tabela de Ordem de Serviço
-- --------------------------------------------------------

create table if not exists oServico(
	idServico int not null auto_increment,
    vTotal float not null,
    dataServico datetime,
    idFunc int not null, -- Tem q rever isso
    primary key(idServico)
    -- Por enquanto isso vai ficar em comentario por ainda não há registro de funcionario
    -- foreign key(idFunc) references funcionario(id)
) engine=innoDB default charset=utf8;

-- --------------------------------------------------------
-- Tabela de Venda de Pneus
-- --------------------------------------------------------

create table if not exists vendaPneu(
	idServico int not null,
    valor float not null,
    idProduto int not null,
    quantidade int not null,
    foreign key(idServico) references oServico(idServico),
    foreign key(idProduto) references produto(id)
) engine=innoDB default charset=utf8;

-- --------------------------------------------------------
-- Tabela de Lavagens
-- --------------------------------------------------------

create table if not exists lavagem(
	idServico int not null,
    vTotal float not null,
    tipo enum('Simples', 'Completa') not null,
    foreign key(idServico) references oServico(idServico)
) engine=innoDB default charset=utf8;

-- --------------------------------------------------------
-- Tabela de produtos usados em lavagens
-- --------------------------------------------------------

-- Talvez isso tenho q ser atualizado

create table if not exists lavagemProd(
    contador int not null, -- Isso para usar a marcação de vezes que o produto pode ser usado
    idLavagem int not null,
    idProduto int not null, -- Isso sera usado para encontrar o produto
    foreign key(idLavagem) references lavagem(idServico),
    foreign key(idProduto) references produto(id)
) engine=innoDB default charset=utf8;

-- --------------------------------------------------------
-- Tabela de carros 
-- --------------------------------------------------------
create table if not exists carro(
	id int not null,
    marca varchar(30) not null,
    nome varchar(30) not null,
    primary key(id)
) engine=innoDB default charset=utf8;

