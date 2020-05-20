use sea;

-- --------------------------------------------------------
-- Pseudo funcionario
-- --------------------------------------------------------
# Ainda tem que rever esse, mas por enquanto serve para fazer o login

INSERT INTO `sea`.`funcionario` (`id`, `nome`, `login`, `senha`, `tipo`, `cpf`, `telefone`) VALUES ('01', 'admin', 'admin', 'admin', 'dono', '12312312344', '12341234');

-- --------------------------------------------------------
-- Produtos
-- --------------------------------------------------------

INSERT INTO `sea`.`produto` (`id`, `nome`, `marca`, `preco`, `tipo`, `quantidade`, `idFunc`) VALUES ('2', 'Tornado Beta 4 Lonas', 'Pirelli', '150.45', 'Pneu', '8', '1');
INSERT INTO `sea`.`produto` (`id`, `nome`, `marca`, `preco`, `tipo`, `quantidade`, `idFunc`) VALUES ('3', 'Scorpion STR', 'Pirelli', '123.44', 'Pneu', '15', '1');
INSERT INTO `sea`.`produto` (`id`, `nome`, `marca`, `preco`, `tipo`, `quantidade`, `idFunc`) VALUES ('4', 'Scorpion ATR', 'Pirelli', '177.83', 'Pneu', '7', '1');
INSERT INTO `sea`.`produto` (`id`, `nome`, `marca`, `preco`, `tipo`, `quantidade`, `idFunc`) VALUES ('5', 'Scorpion MUD', 'Pirelli', '183.73', 'Pneu', '6', '1');
INSERT INTO `sea`.`produto` (`id`, `nome`, `marca`, `preco`, `tipo`, `quantidade`, `idFunc`) VALUES ('6', 'Laufen S FIT', 'Hankook', '205.47', 'Pneu', '3', '1');
INSERT INTO `sea`.`produto` (`id`, `nome`, `marca`, `preco`, `tipo`, `quantidade`, `idFunc`) VALUES ('7', 'Direzza DZ102', 'Dunlop', '203.82', 'Pneu', '10', '1');
INSERT INTO `sea`.`produto` (`id`, `nome`, `marca`, `preco`, `tipo`, `quantidade`, `idFunc`) VALUES ('8', 'Touring R1', 'Dunlop', '165', 'Pneu', '1', '1');
INSERT INTO `sea`.`produto` (`id`, `nome`, `marca`, `preco`, `tipo`, `quantidade`, `idFunc`) VALUES ('9', 'Cinturato P1', 'Pirelli', '162.63', 'Pneu', '21', '1');
INSERT INTO `sea`.`produto` (`id`, `nome`, `marca`, `preco`, `tipo`, `quantidade`, `idFunc`) VALUES ('10', 'SP Sport LM704', 'Dunlop', '148.90', 'Pneu', '18', '1');

-- --------------------------------------------------------
-- Registro de Pneus defeituosos
-- --------------------------------------------------------

INSERT INTO `sea`.`pneuDef` VALUES ('2', default, default, default);
INSERT INTO `sea`.`pneuDef` VALUES ('3', default, default, default);
INSERT INTO `sea`.`pneuDef` VALUES ('4', default, default, default);
INSERT INTO `sea`.`pneuDef` VALUES ('5', default, default, default);
INSERT INTO `sea`.`pneuDef` VALUES ('6', default, default, default);
INSERT INTO `sea`.`pneuDef` VALUES ('7', default, default, default);
INSERT INTO `sea`.`pneuDef` VALUES ('8', default, default, default);
INSERT INTO `sea`.`pneuDef` VALUES ('9', default, default, default);
INSERT INTO `sea`.`pneuDef` VALUES ('10', default, default, default);

-- --------------------------------------------------------
-- Carros
-- --------------------------------------------------------

INSERT INTO `sea`.`carro` (`id`, `marca`, `nome`) VALUES ('1', 'Chevrolet', 'Opala Comodoro');
INSERT INTO `sea`.`carro` (`id`, `marca`, `nome`) VALUES ('2', 'Mitsubishi', 'Pajero TR4');
INSERT INTO `sea`.`carro` (`id`, `marca`, `nome`) VALUES ('3', 'Huyndai', 'Veloster');
INSERT INTO `sea`.`carro` (`id`, `marca`, `nome`) VALUES ('4', 'Peugeot', '2007');
INSERT INTO `sea`.`carro` (`id`, `marca`, `nome`) VALUES ('5', 'Honda', 'HRV');
