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
    hrEntrada datetime not null,
    hrSaida datetime,
    primary key(id)
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
    estado varchar(15),
    quantidade int not null,
    idFunc int not null,
    primary key(id)
--    foreign key(idFunc) references funcionario(id)
) engine=innoDB default charset=utf8;

-- --------------------------------------------------------
-- Tabela de Ordem de Serviço
-- --------------------------------------------------------

create table if not exists oServico(
	idServico int not null auto_increment,
    vTotal float not null,
    dataServico datetime,
    idFunc int not null,
    primary key(idServico),
    foreign key(idFunc) references funcionario(id)
) engine=innoDB default charset=utf8;

-- --------------------------------------------------------
-- Tabela de Venda de Pneus
-- --------------------------------------------------------

create table if not exists vendaPneu(
	idServico int not null,
    valor float not null,
    quantidade int not null,
    foreign key(idServico) references oServico(idServico)
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
-- Tabela de Atualiza
-- --------------------------------------------------------

create table if not exists atualiza(
	idServico int not null,
    idProduto int not null,
    quantidade int not null,
    foreign key(idServico) references oServico(idServico),
    foreign key(idProduto) references produto(id)
) engine=innoDB default charset=utf8;
