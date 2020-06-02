use sea;

-- --------------------------------------------------------
-- Funcionarios da loja
-- --------------------------------------------------------

INSERT INTO funcionario (id, nome, login, senha, cargo, cpf, telefone) VALUES 
('01', 'Arnaldo Machado', 'arnaldoMachado', 'arnaldo01', 'Dono', '81405195029', '986806810'),
('02', 'Rosa Lorena Barbara Peixoto', 'rosaPeixoto', 'rosa02', 'Funcionario', '44402848920', '981913110'),
('03', 'Sebastian Renato Martins', 'sebastianMartins', 'sebastian03', 'Funcionario', '66430165922', '981358657');

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
('4', default, default),
('5', default, default),
('6', default, default),
('7', default, default),
('8', default, default),
('9', default, default),
('10', default, default),
('11', default, default),
('12', default, default),
('13', default, default),
('14', default, default),
('15', default, default),
('16', default, default);

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
