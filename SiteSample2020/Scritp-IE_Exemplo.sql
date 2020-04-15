-- CREATE SCHEMA IF NOT EXISTS `seaP`;
-- USE `seaP` ;

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

create schema if not exists `ie_exemplo`;
  USE `ie_exemplo`;
--
-- Database: `ie_exemplo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `CodDisciplina` int NOT NULL,
  `NomeDisc` varchar(100) NOT NULL,
  `Ementa` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `CodProfessor` int NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Celular` varchar(20) NOT NULL,
  `DataNasc` date DEFAULT NULL,
  `Login` varchar(50) DEFAULT NULL,
  `Senha` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Incluindo dados da tabela `professor`
--

INSERT INTO `professor` (`CodProfessor`, `Nome`, `Celular`, `DataNasc`, `Login`, `Senha`) VALUES
(3, 'Jose da Silva', '(41)99777-1234', '1998-06-20', 'jose.silva', 'a542e148269b71d4b8be8538f09c2f9a'),
(5, 'Eduarda Laranjeiras', '(41)82233-1111', '1999-12-28', 'eduarda.laran', '2fbb45fe0ec24b6900b9f2c4800351bf'),
(6, 'Carlos Ataide', '(41)91234-1234', '1985-11-10', 'carlos.ata', 'e267cfcd18461ce938067eca67c59f41'),
(7, 'Olivia Oliveira', '(41)98889-9999', '1988-12-14', 'oli.oli', '6c71dffdab29ca4d91d0cf293dc82c61'),
(9, 'Lorival Percial Arial', '(41)87654-1234', '1987-11-28', 'lori.per', '6c71dffdab29ca4d91d0cf293dc82c61');

-- --------------------------------------------------------


--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `CodTurma` int NOT NULL,
  `CodProfessor` int NOT NULL,
  `CodDisc` int NOT NULL,
  `Ano` int NOT NULL,
  `Semestre` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tabelas
--

--
-- Índices para a tabela `disciplina`
--
ALTER TABLE `disciplina`
ADD PRIMARY KEY (`CodDisciplina`);

--
-- Índices para a tabela `professor`
--
ALTER TABLE `professor`
ADD PRIMARY KEY (`CodProfessor`);

--
-- Índices para a tabela `turma`
--
ALTER TABLE `turma`
ADD PRIMARY KEY (`CodTurma`),
ADD UNIQUE KEY `CodProfessor` (`CodProfessor`,`CodDisc`,`Ano`,`Semestre`),
ADD KEY `FK_Disc` (`CodDisc`);

--
-- AUTO_INCREMENT para tabelas
--

--
-- AUTO_INCREMENT para a tabela  `disciplina`
--
ALTER TABLE `disciplina`
MODIFY `CodDisciplina` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
MODIFY `CodProfessor` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `turma`
--
ALTER TABLE `turma`
MODIFY `CodTurma` int NOT NULL AUTO_INCREMENT;

--
-- Restrições (constrains) para tabelas
--

--
-- Restrições (constrains) para a tabela `turma`
--
ALTER TABLE `turma`
ADD CONSTRAINT `FK_Disc` FOREIGN KEY (`CodDisc`) REFERENCES `disciplina` (`CodDisciplina`),
ADD CONSTRAINT `FK_Prof` FOREIGN KEY (`CodProfessor`) REFERENCES `professor` (`CodProfessor`);
COMMIT;
