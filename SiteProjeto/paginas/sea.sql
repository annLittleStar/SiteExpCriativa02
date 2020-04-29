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
  USE `SEA`;
--
-- Database: `SEA`
--

-- --------------------------------------------------------
-- TABELAS
-- --------------------------------------------------------
-- Tabela de produtos
-- --------------------------------------------------------

create table produto(
	id int not null auto_increment,
    `nome` varchar(30) not null,
    `marca` varchar(30) not null,
    preco double not null,
    tipo enum('pneu', 'produto de limpeza') not null,
    estado varchar(15),
    quantidade int not null,
    primary key(id)
) engine=innoDB default charset=utf8;

-- --------------------------------------------------------
-- Tabela de funcionarios
-- --------------------------------------------------------
