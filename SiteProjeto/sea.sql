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
--
-- Estrutura da tabela `pneu`
--

CREATE TABLE `pneu` (
  `id` int not null auto_increment,
  `nome` varchar(30) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `preco` double NOT NULL,
  `estado` varchar(15) NOT NULL,
  `quantidade` int NOT NULL,
  primary key(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtoLimpeza`
--

CREATE TABLE `produtoLimpeza` (
  `id` int not null auto_increment,
  `nome` varchar(30) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `preco` double,
  `estado` varchar(15),
  primary key(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Índices para tabelas
--

--
-- Índices para a tabela `pneu`
--
/*ALTER TABLE `pneu`
ADD PRIMARY KEY (`id`);*/

--
-- Índices para a tabela `produtoLimpeza`
--
/*ALTER TABLE `produtoLimpeza`
ADD PRIMARY KEY (`id`);*/

-- ----------------------------------------------------------

-- AUTO_INCREMENT para tabelas
--

--
-- AUTO_INCREMENT para a tabela  `pneu`
--
/*ALTER TABLE `pneu`
MODIFY `id` int NOT NULL AUTO_INCREMENT;*/

--
-- AUTO_INCREMENT for table `professor`
--
/*ALTER TABLE `produtoLimpeza`
MODIFY `id` int NOT NULL AUTO_INCREMENT;*/

-- -----------------------------------------------------------
--
-- Restrições (constrains) para tabelas
--
--
-- Restrições (constrains) para a tabela `pneu`

