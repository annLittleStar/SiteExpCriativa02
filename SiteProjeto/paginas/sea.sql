--- CREATE SCHEMA IF NOT EXISTS `SEA`;
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
	idProd int not null auto_increment,
    nomeProd varchar(30) not null,
    marcaProd varchar(30) not null,
    precoProd double not null,
    tipoProd enum('Pneu', 'Produto de limpeza') not null,
    quantidadeProd int not null,
    idFuncProd int not null,
    limiteUso int not null default(1), -- Quantidade de vezes que pode ser usada
    usado int,
    primary key(idProd)
    -- foreign key(idFunc) references funcionario(id)
) engine=innoDB default charset=utf8;

-- --------------------------------------------------------
-- Tabela de Pneu Defeituoso
-- --------------------------------------------------------

create table if not exists pneuDef(
	idPneuDef int not null,
    qtdA int not null default(0), -- Isso é para a contagem de quantos defeituosos aguardam recolhimento
    qtdR int not null default(0), -- Isso é para a contagem de quantos defeituosos foram recolhidos
    qtdT int not null default(0), -- Isso é para a contagem de quantos defeituosos já passaram pela loja
    foreign key(idPneuDef) references produto(idProd) on delete no action on update no action
) engine=innoDB default charset=utf8;

-- --------------------------------------------------------
-- Tabela de Venda de Pneus
-- --------------------------------------------------------

create table if not exists vendaPneu(
	idVenda int not null auto_increment,
    totalVenda float not null,
    dataVenda datetime,
    idFunc int not null,
    idProdutoVenda int not null,
    qtdVenda int not null,
    foreign key(idProdutoVenda) references produto(idProd)
) engine=innoDB default charset=utf8;

-- --------------------------------------------------------
-- Tabela de Lavagens
-- --------------------------------------------------------

create table if not exists lavagem(
  idTipo int NOT NULL AUTO_INCREMENT,
  tipo varchar(25) NOT NULL,
  PRIMARY KEY (idTipo)
) engine=innoDB default charset=utf8;

-- --------------------------------------------------------
-- Tabela de Lavagens Completas
-- --------------------------------------------------------

create table if not exists lavagemCompleta(
  idLavagemC int not null,
  valorLavagemC float not null,
  dataC date default null,
  horaC time default null,
  PRIMARY KEY (idLavagemC)

) engine=innoDB default charset=utf8;

-- --------------------------------------------------------
-- Tabela de Lavagens Simples
-- --------------------------------------------------------

create table if not exists lavagemSimples(
  idLavagemS int  not null,
  valorLavagemS float  not null,
  dataS date default null,
  horaS time default null,
  PRIMARY KEY (idLavagemS)
) engine=innoDB default charset=utf8;

-- --------------------------------------------------------
-- Tabela de carros 
-- --------------------------------------------------------
create table if not exists carro(
	idCarro int not null,
    marcaCarro varchar(30) not null,
    nomeCarro varchar(30) not null,
    primary key(idCarro)
) engine=innoDB default charset=utf8;

-- --------------------------------------------------------
-- Tabela de pneus indicados 
-- --------------------------------------------------------

CREATE TABLE if not exists pneu (
	idPneu int not null,
	modelo varchar(45) not null,
	carro int not null,
	disponibilidade int,
	primary key(idPneu),
	foreign key(disponibilidade) references produto(idProd), -- arrumar para a quantidade aqui
	foreign key(carro) references carro(idCarro)
)engine=innoDB default charset=utf8;
