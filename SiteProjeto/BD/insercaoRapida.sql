use sea;

-- --------------------------------------------------------
-- Funcionarios da loja
-- --------------------------------------------------------

INSERT INTO `funcionario` (`id`, `nome`, `login`, `senha`, `cargo`, `cpf`, `telefone`, `categoria`) VALUES 
('01', 'Arnaldo Machado', 'arnaldoMachado', 'arnaldo01', 'Dono', '81405195029', '986806810', 'Dono'),
('02', 'Rosa Lorena Barbara Peixoto', 'rosaPeixoto', 'rosa02', 'Funcionario', '44402848920', '981913110', 'Vendedor'),
('03', 'Sebastian Renato Martins', 'sebastianMartins', 'sebastian03', 'Funcionario', '66430165922', '981358657', 'Lavador');

-- --------------------------------------------------------
-- Produtos
-- --------------------------------------------------------

INSERT INTO `produto` (`idProd`, `nomeProd`, `marcaProd`, `precoProd`, `tipoProd`, `quantidadeProd`) VALUES 
('2', 'Tornado Beta 4 Lonas', 'Pirelli', '150.45', 'Pneu', '8'),
('3', 'Scorpion STR', 'Pirelli', '123.44', 'Pneu', '15'),
('4', 'Scorpion ATR', 'Pirelli', '177.83', 'Pneu', '7'),
('5', 'Scorpion MUD', 'Pirelli', '183.73', 'Pneu', '6'),
('6', 'Laufen S FIT', 'Hankook', '205.47', 'Pneu', '3'),
('7', 'Direzza DZ102', 'Dunlop', '203.82', 'Pneu', '10'),
('8', 'Touring R1', 'Dunlop', '165', 'Pneu', '1'),
('9', 'Cinturato P1', 'Pirelli', '162.63', 'Pneu', '21'),
('10', 'SP Sport LM704', 'Dunlop', '148.90', 'Pneu', '18'),
(11,'Dynamic RA03','Hankook',250,'Pneu',5),
(12,'Technic aro 14','Technic',200,'Pneu',7),
(13,'Ecsta PA31','Kumho',230,'Pneu',6),
(14,'Assurance Touring','Goodyear',200,'Pneu',9),
(15,'Primacy 3','Michelin',215,'Pneu',11),
(16,'Turanza ER370','Bridgestone',270,'Pneu',2);

-- --------------------------------------------------------
-- Registro de Pneus defeituosos
-- --------------------------------------------------------

INSERT INTO `pneuDef` VALUES 
('2', default, default),
('3', default, default),
('4', '3', '1'),
('5', default, default),
('6', default, default),
('7', default, default),
('8', '2', default),
('9', default, default),
('10', default, default),
('11', default, default),
('12', default, '4'),
('13', default, default),
('14', default, default),
('15', '1', '7'),
('16', default, default);

-- --------------------------------------------------------
-- Carros
-- --------------------------------------------------------

INSERT INTO `carro` VALUES
('1', 'Chevrolet', 'Opala Comodoro'),
('2', 'Mitsubishi', 'Pajero TR4'),
('3', 'Hyundai', 'Veloster'),
('4', 'Peugeot', '2007'),
('5', 'Honda', 'HRV');

-- --------------------------------------------------------
-- Pneus indicados
-- --------------------------------------------------------

INSERT INTO `pneu` VALUES 
(1,'Hankook Dynamic RA03',1,11),
(2,'Pirelli Tornado Beta 4 Lonas',1,2),
(3,'Pirelli Scorpion ATR',2,4),
(4,'Pirelli Scorpion STR',2,3),
(5,'Pirelli Scorpion MUD',2,5),
(6,'Technic aro 14',1,12),
(7,'Kumho Ecsta PA31',3,13),
(8,'Dunlop Direzza DZ102',3,7),
(9,'Hankook Laufenn S FIT',3,6),
(10,'Dunlop Touring R1',4,8),
(11,'Goodyear Assurance Touring',4,14),
(12,'Pirelli Cinturato P1',4,9),
(13,'Michelin Primacy 3',5,15),
(14,'Bridgestone Turanza ER370',5,16),
(15,'Dunlop SP SPORT LM704',5,10);

-- --------------------------------------------------------
-- Lavagem simples
-- --------------------------------------------------------

INSERT INTO `lavagem` (`idTipo`, `valorLavagem`, `idFuncLavagem`, `tipo`, `dataHorario`) VALUES 
(5, 30.00, 3, 'Completa', '2020-04-04 16:47:52'),
(6, 30.00, 3, 'Completa', '2020-04-20 11:34:41'),
(1, 30.00, 1, 'Completa', '2020-01-02 12:45:49'),
(9, 30.00, 1, 'Completa', '2020-05-11 14:03:46'),
(7, 30.00, 3, 'Completa', '2020-05-04 16:44:57');

-- --------------------------------------------------------
-- Lavagem completa
-- --------------------------------------------------------

INSERT INTO `lavagem` (`idTipo`, `valorLavagem`, `idFuncLavagem`, `tipo`, `dataHorario`) VALUES 
(8, 15.00, 1, 'Simples', '2020-05-07 16:58:23'),
(10, 15.00, 3, 'Simples', '2020-05-20 14:14:29'),
(2, 15.00, 3, 'Simples', '2020-01-30 15:47:21'),
(4, 15.00, 1, 'Simples', '2020-02-21 09:36:29'),
(3, 15.00, 3, 'Simples', '2020-02-17 12:03:59');

-- --------------------------------------------------------
-- Venda de pneus
-- --------------------------------------------------------

INSERT INTO `vendaPneu` (`idVenda`, `totalVenda`, `dataVenda`, `idFuncvenda`, `idProdutoVenda`, `qtdVenda`) VALUES 
(1, 162.63, '2020-01-11 12:58:03', 1, 9, 1),
(3, 410.94, '2020-01-24 11:18:30', 2, 6, 2),
(5, 183.73, '2020-04-30 16:00:54', 2, 5, 1),
(2, 711.32, '2020-01-21 10:45:47', 1, 4, 4),
(4, 148.9, '2020-04-17 16:30:32', 2, 10, 1);
