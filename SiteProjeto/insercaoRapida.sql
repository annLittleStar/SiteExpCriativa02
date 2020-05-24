use sea;

-- --------------------------------------------------------
-- Pseudo funcionario
-- --------------------------------------------------------
# Ainda tem que rever esse, mas por enquanto serve para fazer o login

INSERT INTO `funcionario` (`id`, `nome`, `login`, `senha`, `tipo`, `cpf`, `telefone`) VALUES 
('01', 'admin', 'admin', 'admin', 'dono', '12312312344', '12341234');

-- --------------------------------------------------------
-- Produtos
-- --------------------------------------------------------

INSERT INTO `produto` (`idProd`, `nomeProd`, `marcaProd`, `precoProd`, `tipoProd`, `quantidadeProd`, `idFuncProd`) VALUES 
('2', 'Tornado Beta 4 Lonas', 'Pirelli', '150.45', 'Pneu', '8', '1'),
('3', 'Scorpion STR', 'Pirelli', '123.44', 'Pneu', '15', '1'),
('4', 'Scorpion ATR', 'Pirelli', '177.83', 'Pneu', '7', '1'),
('5', 'Scorpion MUD', 'Pirelli', '183.73', 'Pneu', '6', '1'),
('6', 'Laufen S FIT', 'Hankook', '205.47', 'Pneu', '3', '1'),
('7', 'Direzza DZ102', 'Dunlop', '203.82', 'Pneu', '10', '1'),
('8', 'Touring R1', 'Dunlop', '165', 'Pneu', '1', '1'),
('9', 'Cinturato P1', 'Pirelli', '162.63', 'Pneu', '21', '1'),
('10', 'SP Sport LM704', 'Dunlop', '148.90', 'Pneu', '18', '1'),
(11,'Dynamic RA03','Hankook',250,'Pneu',5,1),
(12,'Technic aro 14','Technic',200,'Pneu',7,1),
(13,'Ecsta PA31','Kumho',230,'Pneu',6,1),
(14,'Assurance Touring','Goodyear',200,'Pneu',9,1),
(15,'Primacy 3','Michelin',215,'Pneu',11,1),
(16,'Turanza ER370','Bridgestone',270,'Pneu',2,1);

-- --------------------------------------------------------
-- Registro de Pneus defeituosos
-- --------------------------------------------------------

INSERT INTO `pneuDef` VALUES 
('2', default, default, default),
('3', default, default, default),
('4', default, default, default),
('5', default, default, default),
('6', default, default, default),
('7', default, default, default),
('8', default, default, default),
('9', default, default, default),
('10', default, default, default),
('11', default, default, default),
('12', default, default, default),
('13', default, default, default),
('14', default, default, default),
('15', default, default, default),
('16', default, default, default);

-- --------------------------------------------------------
-- Carros
-- --------------------------------------------------------

INSERT INTO `carro` VALUES
('1', 'Chevrolet', 'Opala Comodoro'),
('2', 'Mitsubishi', 'Pajero TR4'),
('3', 'Huyndai', 'Veloster'),
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
-- Lavagens
-- --------------------------------------------------------

INSERT INTO `lavagem` VALUES 
(1,'Lavagem Completa'),
(2,'Lavagem Simples');

-- --------------------------------------------------------
-- Lavagem Completa
-- --------------------------------------------------------

INSERT INTO `lavagemcompleta` VALUES 
(1,25,'2020-04-12','02:02:02'),
(3,25,'2020-05-24','17:00:00');

-- --------------------------------------------------------
-- Lavagem Simples
-- --------------------------------------------------------

INSERT INTO `lavagemsimples` VALUES 
(1,50,'2020-05-24','16:53:00'),
(2,50,'2020-05-24','16:53:00');
